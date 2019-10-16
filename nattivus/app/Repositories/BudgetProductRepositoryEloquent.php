<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\BudgetProductRepository;
use AgenciaS3\Entities\BudgetProduct;
use AgenciaS3\Validators\BudgetProductValidator;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class BudgetProductRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class BudgetProductRepositoryEloquent extends BaseRepository implements BudgetProductRepository, CacheableInterface
{

    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BudgetProduct::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BudgetProductValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
