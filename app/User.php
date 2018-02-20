<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'user_type', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userType() {
        switch ($this->user_type) {
            case 1:
                return "admin";
            case 2:
                return "ikhwan";
            case 3:
                return "akhwat";
            default:
                return null;
        }
    }

    public function childUser() {
        switch ($this->userType()) {
            case 'ikhwan':
                return $this->hasOne('App\UserIkhwan');
            case 'akhwat':
                return $this->hasOne('App\UserAkhwat');
            default:
                return null;
        }
    }
}
