<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAttendedEvent extends Model
{
    protected $table = "user_attended_events";

    public function event()
    {
        return $this->hasOne('App\Event', 'id', 'event_id');
    }
}
