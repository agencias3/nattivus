<?php

namespace AgenciaS3\Repositories;

use AgenciaS3\Entities\Category;
use AgenciaS3\Entities\TechnicalSpecification;
use AgenciaS3\Validators\TechnicalSpecificationValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class TechnicalSpecificationRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class TechnicalSpecificationRepositoryEloquent extends BaseRepository implements TechnicalSpecificationRepository
{

    public function getAllProduct($product_id, $limit = null)
    {
        $dados = $this->scopeQuery(function ($query) use ($product_id) {
            $query = $query->leftjoin('product_technical_specifications as pts', 'pts.technical_id', '=', 'technical_specifications.id')
                ->select('technical_specifications.*')
                ->where('active', 'y')
                ->where('pts.product_id', $product_id)
                ->where('pts.deleted_at', null);

            $query = $query->orderBy('name', 'asc');

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
        return TechnicalSpecification::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return TechnicalSpecificationValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
