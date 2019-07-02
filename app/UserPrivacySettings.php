<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPrivacySettings extends Model
{
    protected $table = "user_privacy_settings";

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
