<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CariCalonController extends Controller
{
    //-- BEGIN AKHWAT --//
    public function indexAkhwat() {
        $akhwat = User::akhwat()->get();
        return view('user.list_data_akhwat')->with('akhwat', $akhwat);
    }

    public function lihatDataAkhwat($id) {
        $akhwat = User::akhwat()->where('id', $id)->firstOrFail();
        return view('user.deatildataakhwat')->with($akhwat);
    }
    //-- END AKHWAT --//

    //-- BEGIN IKHWAN --//
    public function indexIkhwan() {
        $ikhwan = User::ikhwan()->get();
        return view('user.list_data_ikhwan')->with('ikhwan', $ikhwan);
    }

    public function lihatDataIkhwan($id) {
        $ikhwan = User::ikhwan()->where('id', $id)->firstOrFail();
        return view('user.detaildataikhwan')->with($ikhwan);
    }
    //-- END IKHWAN --//
}
