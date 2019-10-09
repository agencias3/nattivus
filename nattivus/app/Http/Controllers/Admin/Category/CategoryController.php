<?php

namespace AgenciaS3\Http\Controllers\Admin\Category;

use AgenciaS3\Criteria\FindByNameCriteria;
use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\CategoryValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


class CategoryController extends Controller
{

    protected $repository;

    protected $validator;

    protected $utilObjeto;

    protected $path;

    public function __construct(CategoryRepository $repository,
                                CategoryValidator $validator,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->utilObjeto = $utilObjeto;
        $this->path = 'uploads/category/';
    }

    public function index(AdminRequest $request)
    {
        $name = $request->get('name');
        $category_id = $request->get('category_id');
        if (isset($name) || isset($category_id)) {
            $this->repository->pushCriteria(new FindByNameCriteria($request->get('name')));
        } else {
            $this->repository->skipCriteria();
        }

        $config = $this->header();
        $dados = $this->repository->orderBy('order', 'asc')->paginate();

        return view('admin.category.index', compact('dados', 'config'));
    }

    public function header()
    {
        $config['title'] = "Categorias";
        $config['activeMenu'] = "product";
        $config['activeMenuN2'] = "category";

        return $config;
    }

    public function create()
    {
        $config = $this->header();
        $config['action'] = 'Cadastrar';

        $categories = $this->repository->orderBy('name')->scopeQuery(function($query){
                return $query->where('category_id', null);
            })->pluck('name','id')
            ->prepend('Selecione', '');

        return view('admin.category.create', compact('config', 'categories'));
    }

    public function store(AdminRequest $request)
    {
        try {
            $data = $request->all();
            if (isset($data['icon'])) {
                $image = $this->utilObjeto->uploadFile($request, $data, $this->path, 'icon', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                if ($image) {
                    $data['icon'] = $image;
                }
            }
            if (isset($data['banner'])) {
                $image = $this->utilObjeto->uploadFile($request, $data, $this->path, 'banner', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                if ($image) {
                    $data['banner'] = $image;
                }
            }
            if (isset($data['image'])) {
                $image = $this->utilObjeto->uploadFile($request, $data, $this->path, 'image', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                if ($image) {
                    $data['image'] = $image;
                }
            }
            $data['seo_link'] = $this->utilObjeto->nameUrl($data['name']);

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $dados = $this->repository->create($data);

            $response = [
                'success' => 'Registro adicionado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);

        } catch (ValidatorException $e) {
            if (isset($data['icon'])) {
                $this->utilObjeto->destroyFile($this->path, $data['icon']);
            }
            if (isset($data['banner'])) {
                $this->utilObjeto->destroyFile($this->path, $data['banner']);
            }
            if (isset($data['image'])) {
                $this->utilObjeto->destroyFile($this->path, $data['image']);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function edit($id)
    {
        $config = $this->header();
        $config['action'] = 'Editar';
        $dados = $this->repository->find($id);

        $categories = $this->repository->orderBy('name')->scopeQuery(function($query){
            return $query->where('category_id', null);
        })->pluck('name','id')
            ->prepend('Selecione', '');

        return view('admin.category.edit', compact('dados', 'config', 'categories'));
    }

    public function update(AdminRequest $request, $id)
    {
        try {
            $data = $request->all();
            if (isset($data['icon'])) {
                $image = $this->utilObjeto->uploadFile($request, $data, $this->path, 'icon', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                if ($image) {
                    $data['icon'] = $image;
                }
            }
            if (isset($data['banner'])) {
                $image = $this->utilObjeto->uploadFile($request, $data, $this->path, 'banner', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                if ($image) {
                    $data['banner'] = $image;
                }
            }
            if (isset($data['image'])) {
                $image = $this->utilObjeto->uploadFile($request, $data, $this->path, 'image', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                if ($image) {
                    $data['image'] = $image;
                }
            }
            $data['seo_link'] = $this->utilObjeto->nameUrl($data['name']);

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $dados = $this->repository->update($data, $id);

            $response = [
                'success' => 'Registro alterado com sucesso!'
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

            $data = $dados->toArray();
            if ($dados->active == 'y') {
                $data['active'] = 'n';
            } else {
                $data['active'] = 'y';
            }

            $dados = $this->repository->update($data, $id);

            return $dados;

        } catch (ValidatorException $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        dd('validação se não existe produto vinculado');
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

}
