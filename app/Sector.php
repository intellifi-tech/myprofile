<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = "sectors";

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\User', 'sector_id', 'id');
    }
}
