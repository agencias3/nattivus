<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\TagProductRepository;
use AgenciaS3\Entities\TagProduct;
use AgenciaS3\Validators\TagProductValidator;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class TagProductRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class TagProductRepositoryEloquent extends BaseRepository implements TagProductRepository, CacheableInterface
{

    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TagProduct::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TagProductValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
