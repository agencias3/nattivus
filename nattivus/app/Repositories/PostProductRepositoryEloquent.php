<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\PostProductRepository;
use AgenciaS3\Entities\PostProduct;
use AgenciaS3\Validators\PostProductValidator;

/**
 * Class PostProductRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class PostProductRepositoryEloquent extends BaseRepository implements PostProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PostProduct::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PostProductValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
