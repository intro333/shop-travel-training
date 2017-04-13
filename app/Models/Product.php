<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes; // <-- Используем этот трейт для мягкого удаления.

    protected $table = 'products';

    protected $primaryKey = 'product_id';

    protected $softDelete = true;// <-- Используем этот свойство для мягкого удаления.

    /**
     * Атрибуты, которые должны быть преобразованы в даты.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['product_id'];

    /**
     * Атрибуты, которые должны быть преобразованы к базовым типам.
     *
     * @var array
     */
    protected $casts = [
        'features' => 'array',
        'price'    => 'integer'//Todo Для группирования это поле должно быть integer, а в базе оно double.
    ];

    /*
     * Связь с категориями
     */
    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'product_categories_id', 'category_id');
    }

    /**
     * Заготовка запроса активных продуктов.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
//            ->orderBy('product_categories_id', 'desc');
    }

    public function scopeCategoryId($query, $category_id)
    {
        $query->where('product_categories_id', $category_id);
    }

    /**
     * Получить название продукта, где первая буква будет заглавной.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return mb_ucfirst( $value); // Эта функция определена в app/function-helpers.php
    }

    /**
     * Установить название продукта, где первая буква будет заглавной.
     *
     * @param  string  $value
     * @return string
     */
//    public function setNameAttribute($value)
//    {
//        $this->attributes['name'] = mb_ucfirst($value);
//    }
//
//    public function getCreatedAtAttribute($value)
//    {
//        return $value;
//    }
}
