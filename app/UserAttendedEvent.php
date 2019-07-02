<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAttendedEvent extends Model
{
    protected $table = "user_attended_events";

    public function events()
    {
        return $this->hasMany('App\Event', 'id', 'event_id');
    }
}
