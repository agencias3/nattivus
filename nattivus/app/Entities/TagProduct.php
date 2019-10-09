<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class TagProduct.
 *
 * @package namespace AgenciaS3\Entities;
 */
class TagProduct extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active',
        'seo_description',
        'seo_description',
        'seo_link'
    ];

    public function products()
    {
        return $this->hasMany(ProductTag::class);
    }

}
