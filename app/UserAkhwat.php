<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UserAkhwat extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->hasOne('App\User', 'linked_id');
    }

    public function isDataLengkap() {
        $userAkhwatArray = $this->toArray();

        if(count(array_filter($userAkhwatArray)) == 45) // data lengkap akhwat jika 45 terisi semua
            return true;
        else
            return false;
    }

    public function status() {
        switch ($this->status) {
            case 1:
                return "Belum Menikah";
            case 2:
                return "Sudah Menikah";
            case 3:
                return "Janda";
            case 4:
                return "Duda";
            default:
                return null;
        }
    }

    /**
     * Accessor for Age.
     */
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->age;
    }

    public function pendidikanTerakhir() {
        return $this->hasOne('App\JenjangPendidikan', 'id', 'pendidikan_terakhir_id');
    }
}
