<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    public function comments()
    {
        return $this->hasMany('App\Comment', 'event_id', 'id');
    }

    public function userAttendedEvent()
    {
        return $this->hasOne('App\UserAttendedEvent', 'id', 'event_id');
    }
}
