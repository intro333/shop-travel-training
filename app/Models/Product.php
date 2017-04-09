<?php

namespace App\Models;

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
    protected $dates = ['deleted_at'];

//    protected $fillable = ['*'];

    protected $guarded = ['product_id'];

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
     * Получить имя пользователя.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return mb_ucfirst( $value); // Эта функция определена в app/function-helpers.php
    }

    /**
     * Установить имя пользователя.
     *
     * @param  string  $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = mb_ucfirst($value);
    }
}
