<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\ProductCategoryRepository;
use AgenciaS3\Entities\ProductCategory;
use AgenciaS3\Validators\ProductCategoryValidator;

/**
 * Class ProductCategoryRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ProductCategoryRepositoryEloquent extends BaseRepository implements ProductCategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductCategory::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ProductCategoryValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
