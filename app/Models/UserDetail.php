<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    protected $primaryKey = 'user_details_id';

    protected $guarded = ['user_details_id'];

    /*
     * Связь с пользователем.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_details_user_id', 'user_id');
    }

}
