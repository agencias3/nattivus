<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Services\SEOService;

class CategoryController extends Controller
{

    protected $repository;

    protected $productRepository;

    protected $SEOService;

    public function __construct(CategoryRepository $repository,
                                ProductRepository $productRepository,
                                SEOService $SEOService)
    {
        $this->repository = $repository;
        $this->productRepository = $productRepository;
        $this->SEOService = $SEOService;
    }

    public function index()
    {

    }

    public function show($seo_link)
    {
        $category = $this->repository->findWhere(['active' => 'y', 'seo_link' => $seo_link])->first();
        if ($category) {
            $seoPage = $this->SEOService->getSeoPageSession(6);
            $this->SEOService->getPageComplement($category, 'Categorias');

            $products = $this->productRepository->getAllProductByCategory($category->id, 15);


            return view('site.category.show', compact('category', 'products', 'seoPage'));
        }

        return redirect(route('category'), 301);
    }

    public function subCategory($category, $seo_link)
    {
        $category = $this->repository->findWhere(['active' => 'y', 'seo_link' => $seo_link])->first();
        if ($category) {
            $seoPage = $this->SEOService->getSeoPageSession(6);
            $this->SEOService->getPageComplement($category, 'Categorias');

            $products = $this->productRepository->getAllProductByCategory($category->id, 15);

            return view('site.category.show', compact('category', 'products', 'seoPage'));
        }

        return redirect(route('category'), 301);
    }

    public function getActiveFeatureds($limit)
    {
        $this->repository->popCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->repository->orderBy('order', 'asc')->scopeQuery(function ($query) {
            return $query->where('active', 'y')
                ->where('featured', 'y')
                ->where('category_id', null);
        })->paginate($limit);
    }

    public function getActiveNotFeatureds($limit)
    {
        $this->repository->popCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->repository->orderBy('order', 'asc')->scopeQuery(function ($query) {
            return $query->where('active', 'y')
                ->where('featured', 'n')
                ->where('category_id', null);
        })->paginate($limit);
    }

    public function getActives()
    {
        $this->repository->popCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->repository->orderBy('order', 'asc')->findWhere(['active' => 'y', 'category_id' => null]);
    }

    public function getSubActives($category_id)
    {
        $this->repository->popCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->repository->orderBy('order', 'asc')->findWhere(['active' => 'y', 'category_id' => $category_id]);
    }

}
