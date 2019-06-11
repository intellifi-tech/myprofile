<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAttendedActivities extends Model
{
    protected $table = "user_attended_activities";

    public function event()
    {
        return $this->hasOne('App\Event', 'id', 'activity_id');
    }
}
