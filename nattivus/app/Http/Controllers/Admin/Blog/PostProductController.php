<?php

namespace AgenciaS3\Http\Controllers\Admin\Blog;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\PostProductRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Validators\PostProductValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class PostProductController extends Controller
{

    protected $repository;

    protected $validator;

    protected $productRepository;

    public function __construct(PostProductRepository $repository,
                                PostProductValidator $validator,
                                ProductRepository $productRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->productRepository = $productRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $products = $this->productRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['post_id' => $id]);

        return view('admin.blog.post.product.index', compact('config', 'products', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Blog > Post";
        $config['activeMenu'] = 'blog';
        $config['activeMenuN2'] = 'post';
        $config['action'] = 'Produtos';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'post_id' => $data['post_id'], 'product_id' => $data['product_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Produto já adicionado neste blog.post.')->withInput();
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

    public function destroyAllPost($id)
    {
        return $this->repository->deleteWhere(['post_id' => $id]);
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

    public function destroyAllProduct($id)
    {
        return $this->repository->deleteWhere(['product_id' => $id]);
    }

}