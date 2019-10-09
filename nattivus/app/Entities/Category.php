<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace AgenciaS3\Entities;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'banner',
        'icon',
        'image',
        'description',
        'order',
        'featured',
        'featured_home',
        'active',
        'seo_description',
        'seo_keywords',
        'seo_link'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(ProductCategory::class, 'id');
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

}
