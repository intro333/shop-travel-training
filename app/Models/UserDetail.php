<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    protected $primaryKey = 'user_details_id';

    protected $guarded = ['user_details_id'];

}
