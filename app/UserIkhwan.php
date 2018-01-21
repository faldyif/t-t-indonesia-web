<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIkhwan extends Model
{
    public function user() {
        return $this->hasOne('App\User', 'linked_id');
    }

    public function isDataLengkap() {
        $userIkhwanArray = $this->toArray();

        if(count(array_filter($userIkhwanArray)) == 45) // data lengkap ikhwan jika 45
            return true;
        else
            return false;
    }
}
