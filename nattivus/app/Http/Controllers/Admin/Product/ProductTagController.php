<?php

namespace AgenciaS3\Http\Controllers\Admin\Product;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\PostTagRepository;
use AgenciaS3\Repositories\ProductTagRepository;
use AgenciaS3\Repositories\TagProductRepository;
use AgenciaS3\Repositories\TagRepository;
use AgenciaS3\Validators\PostTagValidator;
use AgenciaS3\Validators\ProductTagValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductTagController extends Controller
{

    protected $repository;

    protected $validator;

    protected $tagProductRepository;

    public function __construct(ProductTagRepository $repository,
                                ProductTagValidator $validator,
                                TagProductRepository $tagProductRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->tagProductRepository = $tagProductRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $tags = $this->tagProductRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['product_id' => $id]);

        return view('admin.product.product.tag.index', compact('config', 'tags', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Produtos";
        $config['activeMenu'] = 'product';
        $config['activeMenuN2'] = 'product';
        $config['action'] = 'Tags';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'product_id' => $data['product_id'], 'tag_id' => $data['tag_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Tag já adicionada neste produto')->withInput();
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

    public function destroyAllTag($id)
    {
        return $this->repository->deleteWhere(['tag_id' => $id]);
    }

}