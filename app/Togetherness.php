<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Togetherness extends Model
{
    protected $table = "togetherness";

    public function togethernessUsers()
    {
        return $this->hasMany('App\TogethernessUser', 'togetherness_id', 'id');
    }
}
