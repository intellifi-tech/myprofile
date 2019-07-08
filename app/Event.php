<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    public function comments()
    {
        return $this->hasMany('App\Comment', 'attended_id', 'id');
    }

    public function userAttendedEvent()
    {
        return $this->hasOne('App\UserAttendedEvent', 'event_id', 'id');
    }
}
