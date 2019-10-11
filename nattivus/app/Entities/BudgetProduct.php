<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class BudgetProduct.
 *
 * @package namespace AgenciaS3\Entities;
 */
class BudgetProduct extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'budget_id',
        'product_id',
        'quantity',
        'technical_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class, 'budget_id');
    }

    public function technical()
    {
        return $this->belongsTo(TechnicalSpecification::class, 'technical_id');
    }

}
