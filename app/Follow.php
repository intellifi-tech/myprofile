<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = "follow";

    public function myFollowers()
    {
        return $this->hasMany('App\User', 'id', 'to_user_id');
    }

    public function userAttendedEvents()
    {
        return $this->hasMany('App\UserAttendedEvent', 'user_id', 'to_user_id');
    }

    public function followings()
    {
        return $this->hasOne('App\User', 'user_id', 'from_user_id');
    }
}
