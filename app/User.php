<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function userPrivacy()
    {
        return $this->hasOne('App\UserPrivacySettings', 'user_id', 'id');
    }

    public function userAttendedEvents()
    {
        return $this->hasMany('App\UserAttendedEvent', 'user_id', 'id');
    }

    public function userExperiences()
    {
        return $this->hasMany('App\UserExperiences', 'user_id', 'id');
    }

    public function company()
    {
        return $this->hasOne('App\Company', 'id', 'company_id');
    }
}
