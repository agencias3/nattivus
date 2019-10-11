<?php

namespace AgenciaS3\Repositories;

use AgenciaS3\Entities\Category;
use AgenciaS3\Entities\Product;
use AgenciaS3\Validators\ProductValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{

    protected $fieldSearchable = [
        'name' => 'like',
        'description' => 'like',
        'categories.name' => 'like',
        'categories.category.name' => 'like',
        'tags.tag.name' => 'like'
    ];

    public function getAllProductByCategoryRand($category_id, $limit, $product_id = null)
    {
        return $this->with(['images', 'categories'])->scopeQuery(function ($query) use ($category_id, $product_id) {
            $query = $query->leftjoin('product_categories as pc', 'pc.product_id', '=', 'products.id')
                ->select('products.*')
                ->where('products.active', 'y')
                ->where('pc.category_id', $category_id);

            $category = Category::find($category_id);
            if ($category->category_id == null) {
                //pega as subcategorias
                if ($category->subCategories) {
                    foreach ($category->subCategories as $row) {
                        $query = $query->orWhere('pc.category_id', $row->id)
                            ->where('products.active', 'y');
                    }
                }
            }

            if (isset($product_id)) {
                $query = $query->where('products.id', '!=', $product_id);
            }

            $query = $query->groupBy('products.id');
            $query = $query->inRandomOrder();

            return $query;
        })->paginate($limit);
    }

    public function getAllProductByCategory($category_id, $limit, $product_id = null)
    {
        return $this->with(['images', 'categories'])->scopeQuery(function ($query) use ($category_id, $product_id) {
            $query = $query->leftjoin('product_categories as pc', 'pc.product_id', '=', 'products.id')
                ->select('products.*')
                ->where('products.active', 'y')
                ->where('pc.category_id', $category_id);

            $category = Category::find($category_id);
            if ($category->category_id) {
                //pega as subcategorias
                if ($category->subCategories) {
                    foreach ($category->subCategories as $row) {
                        $query = $query->orWhere('pc.category_id', $row->id)
                            ->where('products.active', 'y');
                    }
                }
            }

            if (isset($product_id)) {
                $query = $query->where('products.id', '!=', $product_id);
            }

            $query = $query->groupBy('products.id');
            $query = $query->orderBy('products.name', 'asc');

            return $query;
        })->paginate($limit);
    }

    public function getAllProductRand($limit, $product_id = null)
    {
        return $this->with(['images', 'categories'])->scopeQuery(function ($query) use ($product_id) {
            $query = $query->leftjoin('product_categories as pc', 'pc.product_id', '=', 'products.id')
                ->select('products.*')
                ->where('products.active', 'y');

            if (isset($product_id)) {
                $query = $query->where('products.id', '!=', $product_id);
            }

            $query = $query->groupBy('products.id');
            $query = $query->inRandomOrder();

            return $query;
        })->paginate($limit);
    }

    public function getAllProductsActive($limit)
    {
        return $this->with(['images', 'categories'])->scopeQuery(function ($query) {
            $query = $query->where('active', 'y')
                ->orderBy('name', 'asc');
            return $query;
        })->paginate($limit);
    }

    public function getPostsProduct($post, $limit)
    {
        return $this->with(['images', 'categories'])
            ->scopeQuery(function ($query) use ($post) {
                $query = $query->leftjoin('post_products as pp', 'pp.product_id', '=', 'products.id')
                    ->select('products.*')
                    ->where('pp.post_id', '=', $post->id)
                    ->where('active', '=', 'y');
                return $query;
            })->paginate($limit);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return ProductValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
