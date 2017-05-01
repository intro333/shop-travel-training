<?php

namespace App\MongoModels;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $collection = 'products';

    protected $guarded = ['_id'];

}
