<?php

namespace AgenciaS3\Http\Controllers\Admin\Product;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Repositories\TagProductRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\ProductValidator;
use AgenciaS3\Validators\TagProductValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class TagProductController extends Controller
{

    protected $repository;

    protected $validator;

    protected $productTagController;

    protected $utilObjeto;

    public function __construct(TagProductRepository $repository,
                                TagProductValidator $validator,
                                ProductTagController $productTagController,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->productTagController = $productTagController;
        $this->utilObjeto = $utilObjeto;
    }

    public function index()
    {
        $config = $this->header();
        $dados = $this->repository->orderBy('name', 'asc')->paginate();

        return view('admin.product.tag.index', compact('dados', 'config'));
    }

    public function header()
    {
        $config['title'] = "Tags";
        $config['activeMenu'] = "product";
        $config['activeMenuN2'] = "tag";

        return $config;
    }

    public function create()
    {
        $config = $this->header();
        $config['action'] = 'Cadastrar';

        return view('admin.product.tag.create', compact('config'));
    }

    public function store(AdminRequest $request)
    {
        try {
            $data = $request->all();
            $data['seo_link'] = $this->utilObjeto->nameUrl($data['name']);
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

    public function edit($id)
    {
        $config = $this->header();
        $config['action'] = 'Editar';

        $dados = $this->repository->find($id);
        return view('admin.product.tag.edit', compact('dados', 'config'));
    }

    public function update(AdminRequest $request, $id)
    {
        try {
            $data = $request->all();
            $data['seo_link'] = $this->utilObjeto->nameUrl($data['name']);
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $dados = $this->repository->update($data, $id);

            $response = [
                'success' => 'Registro atualizado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);

        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function active($id)
    {
        try {
            $dados = $this->repository->find($id);
            if ($dados->toArray()) {
                $data = $dados->toArray();

                if ($dados->active == 'y') {
                    $data['active'] = 'n';
                } else {
                    $data['active'] = 'y';
                }

                $dados = $this->repository->update($data, $id);

                return $dados;
            }

            return false;

        } catch (ValidatorException $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        $this->productTagController->destroyAllTag($id);
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

}
