<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\ProductTechnicalSpecificationRepository;
use AgenciaS3\Entities\ProductTechnicalSpecification;
use AgenciaS3\Validators\ProductTechnicalSpecificationValidator;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class ProductTechnicalSpecificationRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ProductTechnicalSpecificationRepositoryEloquent extends BaseRepository implements ProductTechnicalSpecificationRepository, CacheableInterface
{

    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductTechnicalSpecification::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ProductTechnicalSpecificationValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
