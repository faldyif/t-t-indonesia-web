<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAkhwat;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Menampilkan halaman edit profil awal
     */
    public function welcome()
    {
        if(Auth::user()->userType() == 'ikhwan') {
            return view('user.welcome_ikhwan');
        } else if(Auth::user()->userType() == 'akhwat') {
            return view('user.welcome_akhwat');
        }
    }

    /**
     * Menampilkan halaman edit profil awal
     */
    public function welcomeStore(Request $request)
    {
        if(Auth::user()->userType() == 'ikhwan') {
            return view('user.welcome_ikhwan');
        } else if(Auth::user()->userType() == 'akhwat') {
            $this->validate($request, [
                'domisili' => '',
                'asal' => '',
                'tempat_lahir' => '',
                'tanggal_lahir' => '',
                'pekerjaan' => '',
                'pendidikan' => '',
                'ket_pendidikan' => '',
                'tinggi_badan' => '',
                'berat_badan' => '',
                'hobi' => '',
                'kebiasaan_baik' => '',
                'kebiasaan_buruk' => '',
                'hal_disuka' => '',
                'hal_taksuka' => '',
                'pakaian_harian' => '',
                'anak_ke' => '',
                'saudara' => '',
                'suku_ayah' => '',
                'suku_ibu' => '',
                'tempat_kajian' => '',
                'tema_kajian' => '',
                'ustadz' => '',
                'kegiatan_harian' => '',
                'pengalaman_taaruf_offline' => '',
                'pengalaman_taaruf_online' => '',
                'kriteria_pendidikan' => '',
                'kriteria_domisili' => '',
                'kriteria_lainnya' => '',
                'kriteria_usia_from' => '',
                'kriteria_usia_to' => ''
            ]);

            $userAkhwatID = UserAkhwat::where('user_id', Auth::user()->id)->first()->id;
            $userAkhwat = UserAkhwat::find($userAkhwatID);
            $userAkhwat->domisili = $request->domisili;
            $userAkhwat->asal = $request->asal;
            $userAkhwat->tempat_lahir = $request->tempat_lahir;
            $userAkhwat->tanggal_lahir = $request->tanggal_lahir;
//            $userAkhwat->pekerjaan = $request->pekerjaan;
            $userAkhwat->pendidikan_terakhir_id = $request->pendidikan;
            $userAkhwat->ket_pendidikan_terakhir = $request->pendidikan;
            $userAkhwat->tinggi_badan = $request->tinggi_badan;
            $userAkhwat->berat_badan = $request->berat_badan;
            $userAkhwat->hobi = $request->hobi;
            $userAkhwat->kebiasaan_baik = $request->kebiasaan_baik;
            $userAkhwat->kebiasaan_buruk = $request->kebiasaan_buruk;
            $userAkhwat->hal_disukai = $request->hal_disuka;
            $userAkhwat->hal_taksuka = $request->hal_taksuka;
            $userAkhwat->pakaian_harian = $request->pakaian_harian;
            $userAkhwat->anak_ke = $request->anak_ke;
            $userAkhwat->saudara = $request->saudara;
            $userAkhwat->suku_ayah = $request->suku_ayah;
            $userAkhwat->suku_ibu = $request->suku_ibu;
            $userAkhwat->tempat_ngaji = $request->tempat_kajian;
            $userAkhwat->tentang_ngaji = $request->tema_kajian;
            $userAkhwat->ustadz = $request->ustadz;
            $userAkhwat->kegiatan = $request->kegiatan;
            $userAkhwat->pengalaman_taaruf_offline = $request->pengalaman_taaruf_offline;
            $userAkhwat->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
            $userAkhwat->kriteria_pendidikan_id = $request->kriteria_pendidikan;
            $userAkhwat->kriteria_domisili = $request->kriteria_domisili;
            $userAkhwat->kriteria_lain = $request->kriteria_lainnya;
            $userAkhwat->kriteria_usia_from = $request->kriteria_usia_from;
            $userAkhwat->kriteria_usia_to = $request->kriteria_usia_to;

            // A bit tricky part
            $userAkhwat->goldar = $request->goldar;
            $userAkhwat->izin_ortu = $request->izinortu;
            $userAkhwat->niqob = $request->niqob;
            $userAkhwat->kacamata = $request->kacamata;
//            $userAkhwat->sholat = $request->sholat;
            $userAkhwat->kajian_rutin = $request->kajian;

            $userAkhwat->save();

//            dd($request);
            return response()->json($request);
        }
    }

    /**
     * Menampilkan halaman edit profil awal
     */
    public function registrationSuccess()
    {
        if(!Auth::user()->verified) {
            return view('auth.registration-success');
        }
        return redirect('dashboard');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->userType() == 'ikhwan') {
            $user = User::where('users.id', Auth::user()->id)->join('user_ikhwans', 'users.id', '=', 'user_ikhwans.user_id')->get()[0];
            return view('user.detaildataikhwan')->with('user', $user);

        } else if(Auth::user()->userType() == 'akhwat') {
            $user = User::where('users.id', Auth::user()->id)->join('user_akhwats', 'users.id', '=', 'user_akhwats.user_id')->get()[0];
            return view('user.detaildataakhwat')->with('user', $user);
        }
    }

    /**
     * Menampilkan halaman edit profil
     */
    public function editProfile()
    {
        if(Auth::user()->userType() == 'ikhwan') {
            $user = User::where('users.id', Auth::user()->id)->join('user_ikhwans', 'users.id', '=', 'user_ikhwans.user_id')->get()[0];
            return view('user.editdataikhwan')->with('user', $user);

        } else if(Auth::user()->userType() == 'akhwat') {
            $user = User::where('users.id', Auth::user()->id)->join('user_akhwats', 'users.id', '=', 'user_akhwats.user_id')->get()[0];
            return view('user.editdataakhwat')->with('user', $user);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
