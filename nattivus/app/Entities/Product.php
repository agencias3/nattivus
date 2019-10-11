<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace AgenciaS3\Entities;
 */
class Product extends Model implements Transformable
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
        'code',
        'description',
        'video',
        'order',
        'active',
        'seo_description',
        'seo_keywords',
        'seo_link'
    ];

    public function categories()
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function postProducts()
    {
        return $this->hasMany(PostProduct::class);
    }

    public function tags()
    {
        return $this->hasMany(ProductTag::class);
    }

    public function budgetProducts()
    {
        return $this->hasMany(BudgetProduct::class);
    }

}
