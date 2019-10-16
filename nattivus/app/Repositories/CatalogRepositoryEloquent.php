<?php

namespace AgenciaS3\Repositories;

use AgenciaS3\Entities\Catalog;
use AgenciaS3\Validators\CatalogValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class CatalogRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class CatalogRepositoryEloquent extends BaseRepository implements CatalogRepository
{

    public function getActive($limit)
    {
        return $this->scopeQuery(function ($query) {
            $query = $query->where('active', 'y')
                ->orderBy('date', 'desc');
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
        return Catalog::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return CatalogValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
