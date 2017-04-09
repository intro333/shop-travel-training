<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';

    protected $primaryKey = 'category_id';

    protected $guarded = ['category_id']; // Нельзя изменять category_id, а остальные можно.

    /*
     * Связь с продуктами
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'product_categories_id', 'category_id');
    }
}
