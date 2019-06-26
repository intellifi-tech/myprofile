<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLikeActivity extends Model
{
    protected $table = "user_like_activity";

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}