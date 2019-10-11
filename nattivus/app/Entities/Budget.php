<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Budget.
 *
 * @package namespace AgenciaS3\Entities;
 */
class Budget extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'message',
        'view',
        'session_id',
        'ip'
    ];

    public function products()
    {
        return $this->hasMany(BudgetProduct::class);
    }

}
