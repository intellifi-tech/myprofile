<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExperiences extends Model
{
    protected $table = "user_experiences";

    public function company()
    {
        return $this->hasOne('App\Company', 'id', 'company_id');
    }
}
