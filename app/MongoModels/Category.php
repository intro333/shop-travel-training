<?php

namespace App\MongoModels;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    protected $collection = 'categories';

    protected $guarded = ['_id'];

    public function products()
    {
        return $this->embedsMany('App\MongoModels\Product');
    }

//    public $timestamps = false;
}
