<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = "follow";

    public function myFollowers()
    {
        return $this->hasMany('App\User', 'id', 'from_user_id');
    }
}
