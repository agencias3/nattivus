<?php

namespace AgenciaS3\Http\Controllers\Admin\Product;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\TechnicalSpecificationRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\TechnicalSpecificationValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class TechnicalSpecificationController extends Controller
{

    protected $repository;

    protected $validator;

    protected $productTechnicalSpecificationController;

    protected $utilObjeto;

    public function __construct(TechnicalSpecificationRepository $repository,
                                TechnicalSpecificationValidator $validator,
                                ProductTechnicalSpecificationController $productTechnicalSpecificationController,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->productTechnicalSpecificationController = $productTechnicalSpecificationController;
        $this->utilObjeto = $utilObjeto;
    }

    public function index()
    {
        $config = $this->header();
        $dados = $this->repository->orderBy('name', 'asc')->paginate();

        return view('admin.product.technical-specification.index', compact('dados', 'config'));
    }

    public function header()
    {
        $config['title'] = "Especificação Técnica";
        $config['activeMenu'] = "product";
        $config['activeMenuN2'] = "technical-specification";

        return $config;
    }

    public function create()
    {
        $config = $this->header();
        $config['action'] = 'Cadastrar';

        return view('admin.product.technical-specification.create', compact('config'));
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
        return view('admin.product.technical-specification.edit', compact('dados', 'config'));
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
        $this->productTechnicalSpecificationController->destroyAll($id);
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

}
