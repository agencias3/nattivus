<?php

namespace AgenciaS3\Http\Controllers\Admin\Product;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\PostTagRepository;
use AgenciaS3\Repositories\ProductRelatedRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Repositories\ProductTagRepository;
use AgenciaS3\Repositories\TagProductRepository;
use AgenciaS3\Repositories\TagRepository;
use AgenciaS3\Validators\PostTagValidator;
use AgenciaS3\Validators\ProductRelatedValidator;
use AgenciaS3\Validators\ProductTagValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductRelatedController extends Controller
{

    protected $repository;

    protected $validator;

    protected $categoryRepository;

    protected $productRepository;

    public function __construct(ProductRelatedRepository $repository,
                                ProductRelatedValidator $validator,
                                CategoryRepository $categoryRepository,
                                ProductRepository $productRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $categories = $this->categoryRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['product_id' => $id]);

        return view('admin.product.product.related.index', compact('config', 'categories', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Produtos";
        $config['activeMenu'] = 'product';
        $config['activeMenuN2'] = 'product';
        $config['action'] = 'Relacionados';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'product_id' => $data['product_id'], 'product_related_id' => $data['product_related_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Produto já relacionado neste produto')->withInput();
        } else {
            try {

                $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
                $dados = $this->repository->create($data);

                $response = [
                    'success' => 'Registro adicionado com sucesso!'
                ];

                return redirect()->back()->with('success', $response['success']);

            } catch (ValidatorException $e) {
                return redirect()->back()->withErrors($e->getMessageBag())->withInput();
            }
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

    public function destroyAll($id)
    {
        return $this->repository->deleteWhere(['product_related_id' => $id]);
    }

    public function productSelect($category_id)
    {
        $html = '<option>Selecione um produto:</option>';
        $dados = $this->productRepository->scopeQuery(function ($query) use ($category_id) {
            $query = $query->leftjoin('product_categories as pc', 'products.id', '=', 'pc.product_id')
                ->select('products.*')
                ->where('pc.category_id', $category_id);

            return $query;
        })->all();
        if ($dados->toArray()) {
            foreach ($dados as $row) {
                $html .= '<option value="' . $row->id . '">' . $row->name . '</option>';
            }
        }

        return $html;
    }

}