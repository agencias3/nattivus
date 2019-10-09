<?php

namespace AgenciaS3\Http\Controllers\Admin\Product;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\ProductCategoryRepository;
use AgenciaS3\Validators\ProductCategoryValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductCategoryController extends Controller
{

    protected $repository;

    protected $validator;

    protected $categoryRepository;

    public function __construct(ProductCategoryRepository $repository,
                                ProductCategoryValidator $validator,
                                CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->categoryRepository = $categoryRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $categories = $this->categoryRepository->orderBy('name', 'asc')->all();
        $dados = $this->repository->findByField('product_id', $id);

        return view('admin.product.product.category.index', compact('config', 'categories', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Produto";
        $config['activeMenu'] = 'product';
        $config['activeMenuN2'] = 'product';
        $config['action'] = 'Categorias';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();

        //deleta todas as categorias relacionadas do produto

        //add categoria relacionada com o produto
        //a primeira vira principal
        //destaque recebe n
        $this->repository->deleteWhere(['product_id' => $data['product_id']]);

		try {

			$cont = 0;
			if (isset($data['category']) && count($data['category']) > 0) {
                foreach ($data['category'] as $key) {
                    $cont++;
                    if ($cont == 1) {
                        $data['main'] = 'y';
                    } else {
                        $data['main'] = 'n';
                    }
                    $data['category_id'] = $key;
                    $data['featured'] = 'n';

                    $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
                    $dados = $this->repository->create($data);
                }
            }

            $response = [
                'success' => 'Registro adicionado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);


		} catch (ValidatorException $e) {
			return redirect()->back()->withErrors($e->getMessageBag())->withInput();
		}

    }

    public function main($id)
    {
        try {
            $dados = $this->repository->find($id);
            if ($dados->toArray()) {
                $data = $dados->toArray();
                if ($dados->active == 'y') {
                    $data['main'] = 'n';
                } else {
                    $data['main'] = 'y';
                }
                $dados = $this->repository->update($data, $id);

                return $dados;
            }

            return false;

        } catch (ValidatorException $e) {
            return false;
        }
    }

    public function destroyAllProduct($id)
    {
        return $this->repository->deleteWhere(['product_id' => $id]);
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

    public function destroyAllCategory($id)
    {
        return $this->repository->deleteWhere(['category_id' => $id]);
    }

}