<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UserIkhwan extends Model
{
    protected $guarded = [];

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

    /**
     * Accessor for Age.
     */
    public function getDetailPekerjaanAttribute()
    {
        return $this->relPekerjaan->pekerjaan;
    }

    public function pendidikanTerakhir() {
        return $this->hasOne('App\JenjangPendidikan', 'id', 'pendidikan_terakhir_id');
    }

    public function relPekerjaan() {
        // TODO: change this localKey value to pendidikan after migrate
        return $this->hasOne('App\Pekerjaan', 'id', 'pekerjaan_id');
    }
}
