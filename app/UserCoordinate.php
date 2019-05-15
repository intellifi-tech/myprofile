<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCoordinate extends Model
{
    protected $table = "user_coordinates";

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
