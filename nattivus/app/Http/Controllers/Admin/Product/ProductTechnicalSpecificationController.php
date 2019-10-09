<?php

namespace AgenciaS3\Http\Controllers\Admin\Product;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\ProductTechnicalSpecificationRepository;
use AgenciaS3\Repositories\TechnicalSpecificationRepository;
use AgenciaS3\Validators\ProductTechnicalSpecificationValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductTechnicalSpecificationController extends Controller
{

    protected $repository;

    protected $validator;

    protected $technicalSpecificationRepository;

    public function __construct(ProductTechnicalSpecificationRepository $repository,
                                ProductTechnicalSpecificationValidator $validator,
                                TechnicalSpecificationRepository $technicalSpecificationRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->technicalSpecificationRepository = $technicalSpecificationRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $technical = $this->technicalSpecificationRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['product_id' => $id]);

        return view('admin.product.product.technical-specification.index', compact('config', 'technical', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Produtos";
        $config['activeMenu'] = 'product';
        $config['activeMenuN2'] = 'product';
        $config['action'] = 'Especificação Técnica';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'product_id' => $data['product_id'], 'technical_id' => $data['technical_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Especificação Técnica já adicionada neste produto')->withInput();
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
        return $this->repository->deleteWhere(['technical_id' => $id]);
    }

}