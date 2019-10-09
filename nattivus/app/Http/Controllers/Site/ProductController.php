<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\ClientRepository;
use AgenciaS3\Repositories\ProductFileRepository;
use AgenciaS3\Repositories\ProductImageRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Repositories\ProductTagRepository;
use AgenciaS3\Repositories\ProductTechnicalSpecificationRepository;
use AgenciaS3\Repositories\ProductTextRepository;
use AgenciaS3\Repositories\TechnicalSpecificationRepository;
use AgenciaS3\Services\SEOService;

class ProductController extends Controller
{

    protected $productRepository;

    protected $productImageRepository;

    protected $productFileRepository;

    protected $productTextRepository;

    protected $technicalSpecificationRepository;

    protected $categoryRepository;

    protected $clientRepository;

    protected $productTagRepository;

    protected $SEOService;

    public function __construct(ProductRepository $productRepository,
                                ProductImageRepository $productImageRepository,
                                ProductFileRepository $productFileRepository,
                                ProductTextRepository $productTextRepository,
                                TechnicalSpecificationRepository $technicalSpecificationRepository,
                                CategoryRepository $categoryRepository,
                                ClientRepository $clientRepository,
                                ProductTagRepository $productTagRepository,
                                SEOService $SEOService)
    {
        $this->productRepository = $productRepository;
        $this->productImageRepository = $productImageRepository;
        $this->productFileRepository = $productFileRepository;
        $this->productTextRepository = $productTextRepository;
        $this->technicalSpecificationRepository = $technicalSpecificationRepository;
        $this->categoryRepository = $categoryRepository;
        $this->clientRepository = $clientRepository;
        $this->productTagRepository = $productTagRepository;
        $this->SEOService = $SEOService;
    }

    public function index()
    {
        $seoPage = $this->SEOService->getSeoPageSession(6);
        $this->SEOService->getPage($seoPage);

        $products = $this->productRepository->getAllProductsActive(15);

        return view('site.category.index', compact('products', 'seoPage'));
    }

    public function show(SiteRequest $request, $seo_link)
    {
        $product = $this->productRepository->findWhere(['active' => 'y', 'seo_link' => $seo_link])->first();
        if ($product) {
            $images = $this->productImageRepository->orderBy('order', 'asc')->findByField('product_id', $product->id);

            $cover = null;
            $image = $images->firstWhere('cover', 'y');
            if (isPost($image)) {
                $cover = asset('uploads/product/' . $image->image);
            }

            $seoPage = $this->SEOService->getSeoPageSession(4);
            $this->SEOService->getPageComplement($product, $seoPage['name'], $cover, $cover);

            $categoryFeatured = $product->categories->firstWhere('main', 'y');
            $products = $this->productRepository->getAllProductByCategory($categoryFeatured->id, 15, $product->id);
            $technicals = $this->technicalSpecificationRepository->getAllProduct($product->id);

            return view('site.product.show', compact('product', 'seoPage', 'images', 'products', 'categoryFeatured', 'technicals'));
        }

        return redirect(route('category'), 301);
    }

    public function getCategoryActive()
    {
        $this->categoryRepository->popCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->categoryRepository->orderBy('order', 'asc')->findByField('active', 'y');
    }

    public function getTagProduct($id)
    {
        $this->productTagRepository->popCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->productTagRepository->getTags($id, 1);
    }

}
