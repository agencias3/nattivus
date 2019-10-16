<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\PostRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Repositories\TagRepository;

class SiteMapController extends Controller
{

    protected $tagRepository;

    protected $postRepository;

    protected $categoryRepository;

    protected $productRepository;

    public function __construct(TagRepository $tagRepository,
                                PostRepository $postRepository,
                                CategoryRepository $categoryRepository,
                                ProductRepository $productRepository)
    {
        $this->tagRepository = $tagRepository;
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $tags = $this->tagRepository->findByField('active', 'y');
        $posts = $this->postRepository->findByField('active', 'y');

        $categories = $this->categoryRepository->findByField('active', 'y');
        $products = $this->productRepository->findByField('active', 'y');

        return response()
            ->view('sitemap.index', compact('tags', 'posts', 'categories', 'products'))
            ->header('Content-Type', 'text/xml');
    }
}
