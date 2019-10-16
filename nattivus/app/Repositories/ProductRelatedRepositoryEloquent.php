<?php

namespace AgenciaS3\Repositories;

use AgenciaS3\Entities\ProductRelated;
use AgenciaS3\Validators\ProductRelatedValidator;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class ProductRelatedRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ProductRelatedRepositoryEloquent extends BaseRepository implements ProductRelatedRepository, CacheableInterface
{

    use CacheableRepository;

    public function getRelateds($product_id, $limit = null)
    {
        $dados = $this->with(['productRelated'])->scopeQuery(function ($query) use ($product_id) {
            $query = $query->leftjoin('products as p', 'p.id', '=', 'product_relateds.product_related_id')
                ->select('product_relateds.*')
                ->where('product_relateds.product_id', '=', $product_id)
                ->where('p.active', 'y');
            return $query;
        });

        if ($limit) {
            return $dados->paginate($limit);
        } else {
            return $dados->all();
        }
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductRelated::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return ProductRelatedValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
