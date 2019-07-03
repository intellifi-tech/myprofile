<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";

    public function fromUser()
    {
        return $this->hasOne('App\User', 'id', 'from_user_id');
    }

    public function toUser()
    {
        return $this->hasOne('App\User', 'id', 'to_user_id');
    }
}
