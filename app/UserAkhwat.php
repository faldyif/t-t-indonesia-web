<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAkhwat extends Model
{
    public function user() {
        return $this->hasOne('App\User');
    }

    public function isDataLengkap() {
        $userAkhwatArray = $this->toArray();

        if(count(array_filter($userAkhwatArray)) == 45) // data lengkap akhwat jika 45 terisi semua
            return true;
        else
            return false;
    }
}
