<?php

namespace AgenciaS3\Repositories;

use AgenciaS3\Entities\ProductTag;
use AgenciaS3\Validators\ProductTagValidator;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class ProductTagRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ProductTagRepositoryEloquent extends BaseRepository implements ProductTagRepository, CacheableInterface
{

    use CacheableRepository;

    public function getTags($product_id, $limit = null)
    {
        $dados = $this->scopeQuery(function ($query) use ($product_id) {
            $query = $query->leftjoin('tag_products as tp', 'tp.id', '=', 'product_tags.tag_id')
                ->select('product_tags.*')
                ->where('product_id', '=', $product_id)
                ->where('tp.active', 'y');
            return $query;
        });

        if (isset($limit)) {
            $dados = $dados->paginate($limit);
        }

        if ($limit == 1) {
            return $dados->first();
        }

        return $dados->all();
    }

    public function getTagProducts($tag_ig, $limit = null)
    {
        $dados = $this->scopeQuery(function ($query) use ($tag_ig) {
            $query = $query->leftjoin('tag_products as tp', 'tp.id', '=', 'product_tags.tag_id')
                ->select('product_tags.*')
                ->where('tag_id', '=', $tag_ig)
                ->where('tp.active', 'y');
            return $query;
        });

        if (isset($limit)) {
            $dados = $dados->paginate($limit);
        }

        if ($limit == 1) {
            return $dados->first();
        }

        return $dados->all();
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductTag::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return ProductTagValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
