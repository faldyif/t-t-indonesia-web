<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EditUserController extends Controller
{
    public function indexChooseGender() {
        $user = Auth::user();
        if($user->userType() != null) {
            return "anda sudah memilih gender sebelumnya";
        }

        return view('choose-gender');
    }

    public function chooseGender($gender) {
        $user = Auth::user();

        if($user->userType() != null) {
            return "anda sudah memilih gender sebelumnya";
        }

        switch ($gender) {
            case 'ikhwan':
                $user->user_type = 2;
                break;
            case 'akhwat':
                $user->user_type = 3;
                break;
            default:
                return "invailid command";
        }

        $user->touch();

        return redirect('/home');
    }
}
