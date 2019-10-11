<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\BudgetRepository;
use AgenciaS3\Entities\Budget;
use AgenciaS3\Validators\BudgetValidator;

/**
 * Class BudgetRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class BudgetRepositoryEloquent extends BaseRepository implements BudgetRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Budget::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BudgetValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
