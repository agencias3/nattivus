<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\ProductRelatedRepository;
use AgenciaS3\Entities\ProductRelated;
use AgenciaS3\Validators\ProductRelatedValidator;

/**
 * Class ProductRelatedRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ProductRelatedRepositoryEloquent extends BaseRepository implements ProductRelatedRepository
{
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
