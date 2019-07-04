<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }
}
