<?php

namespace App\Http\Controllers;

use App\DetailHobi;
use App\DetailKebiasaanBaik;
use App\DetailKebiasaanBuruk;
use App\Hobi;
use App\KebiasaanBaik;
use App\KebiasaanBuruk;
use App\Suku;
use App\User;
use App\UserAkhwat;
use App\UserIkhwan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Menampilkan halaman edit profil awal
     */
    public function welcome()
    {
        $hobi = Hobi::all();
        $suku = Suku::all();
        $kebiasaanBaik = KebiasaanBaik::all();
        $kebiasaanBuruk = KebiasaanBuruk::all();

        if(Auth::user()->userType() == 'ikhwan') {
            return view('user.welcome_ikhwan')
                ->with('hobi', $hobi)
                ->with('kebiasaanBaik', $kebiasaanBaik)
                ->with('kebiasaanBuruk', $kebiasaanBuruk)
                ->with('suku', $suku);
        } else if(Auth::user()->userType() == 'akhwat') {
            return view('user.welcome_akhwat')
                ->with('hobi', $hobi)
                ->with('kebiasaanBaik', $kebiasaanBaik)
                ->with('kebiasaanBuruk', $kebiasaanBuruk)
                ->with('suku', $suku);
        }
    }

    /**
     * Menyimpan data edit profil awal
     */
    public function welcomeStore(Request $request) {
        if(Auth::user()->userType() == 'ikhwan') {
            $this->validate($request, [
                'goldar' => '',
                'domisili' => '',
                'asal' => '',
                'tempat_lahir' => '',
                'tanggal_lahir' => '',
                'pekerjaan' => '',
                'pendidikan_terakhir_id' => '',
                'ket_pendidikan_terakhir' => '',
                'riwayat_penyakit' => '',
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
                'status' => '',
                'ngaji_sunnah' => '',
                'tempat_ngaji' => '',
                'tentang_ngaji' => '',
                'kajian_rutin' => '',
                'celana' => '',
                'ustadz' => '',
                'keg_harian' => '',
                'pengalaman_taaruf_offline' => '',
                'pengalaman_taaruf_online' => '',
                'target_menikah' => '',
                'siap_nikah' => '',
                'sholat' => '',
                'merokok' => '',
                'kriteria_pendidikan_id' => '',
                'ket_kriteria_pendidikan' => '',
                'kriteria_domisili' => '',
                'kriteria_lainnya' => '',
                'kriteria_usia_from' => '',
                'kriteria_usia_to' => '',
                'ciri_fisik' => '',
                'rencana_setelah_menikah' => '',
            ]);

            $userIkhwanID = UserIkhwan::where('user_id', Auth::user()->id)->first()->id;
            $userIkhwan = UserIkhwan::find($userIkhwanID);
            $userIkhwan->domisili = $request->domisili;
            $userIkhwan->asal = $request->asal;
            $userIkhwan->riwayat_penyakit = $request->riwayat_penyakit;
            $userIkhwan->tempat_lahir = $request->tempat_lahir;
            $userIkhwan->tanggal_lahir = Carbon::parse($request->tanggal_lahir);
            $userIkhwan->pendidikan_terakhir_id = $request->pendidikan;
            $userIkhwan->ket_pendidikan_terakhir = $request->pendidikan;
            $userIkhwan->tinggi_badan = $request->tinggi_badan;
            $userIkhwan->berat_badan = $request->berat_badan;
            $userIkhwan->hal_disukai = $request->hal_disuka;
            $userIkhwan->hal_taksuka = $request->hal_taksuka;
            $userIkhwan->pakaian_harian = $request->pakaian_harian;
            $userIkhwan->anak_ke = $request->anak_ke;
            $userIkhwan->saudara = $request->saudara;
            $userIkhwan->suku_ayah_id = $request->suku_ayah;
            $userIkhwan->suku_ibu_id = $request->suku_ibu;
            $userIkhwan->pekerjaan = $request->pekerjaan;
            $userIkhwan->ngaji_sunnah = $request->ngaji_sunnah;
            $userIkhwan->tempat_ngaji = $request->tempat_ngaji;
            $userIkhwan->tentang_ngaji = $request->tema_ngaji;
            $userIkhwan->kajian_rutin = $request->kajian_rutin;
            $userIkhwan->ustadz = $request->ustadz;
            $userIkhwan->celana = $request->celana;
            // $userIkhwan->hobi = $request->hobi;
            $userIkhwan->keg_harian = $request->keg_harian;
            $userIkhwan->pengalaman_taaruf_offline = $request->pengalaman_taaruf_offline;
            $userIkhwan->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
            $userIkhwan->target_menikah = $request->target_menikah;
            $userIkhwan->siap_nikah = $request->siap_nikah;
            $userIkhwan->sholat = $request->sholat;
            $userIkhwan->merokok = $request->merokok;
            $userIkhwan->kriteria_pendidikan_id = $request->kriteria_pendidikan_id;
            $userIkhwan->ket_kriteria_pendidikan = $request->ket_kriteria_pendidikan;
            $userIkhwan->kriteria_domisili = $request->kriteria_domisili;
            $userIkhwan->kriteria_lain = $request->kriteria_lainnya;
            $userIkhwan->kriteria_usia_from = $request->kriteria_usia_from;
            $userIkhwan->kriteria_usia_to = $request->kriteria_usia_to;
            $userIkhwan->ciri_fisik = $request->ciri_fisik;
            $userIkhwan->rencana_setelah_menikah = $request->rencana_setelah_menikah;

            // A bit tricky part
            $userIkhwan->goldar = $request->goldar;
            $userIkhwan->kacamata = $request->kacamata;
            $userIkhwan->status = $request->status_hubungan;

            if($request->hasFile('foto_ktp') && $request->file('foto_ktp')->isValid()) {
                $destinationPath = 'public/uploads/ktp_ikhwan';
                $extension = $request->foto_ktp->extension();
                $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
                $request->foto_ktp->storeAs($destinationPath, $fileName);
                $userIkhwan->foto_ktp_path = $fileName;
            }

            // Insert hobby
            foreach ((array)$request->hobi as $key) {
                DetailHobi::firstOrCreate(['user_id' => Auth::user()->id, 'hobi_id' => $key]);
            }

            // Insert kebiasaan baik
            foreach ((array)$request->kebiasaan_baik as $key) {
                DetailKebiasaanBaik::firstOrCreate(['user_id' => Auth::user()->id, 'keb_baik_id' => $key]);
            }

            // Insert kebiasaan buruk
            foreach ((array)$request->kebiasaan_buruk as $key) {
                DetailKebiasaanBuruk::firstOrCreate(['user_id' => Auth::user()->id, 'keb_buruk_id' => $key]);
            }

            $userIkhwan->save();

            $user = User::find(Auth::user()->id);
            $user->first_login = true;
            $user->save();

//            dd($request);
            return redirect(route('user.dashboard'));
        } else if(Auth::user()->userType() == 'akhwat') {
            $this->validate($request, [
                'goldar' => '',
                'hal_disuka' => '',
                'hal_taksuka' => '',
                'riwayat_penyakit' => '',
                'asal' => '',
                'domisili' => '',
                'suku_ayah' => '',
                'suku_ibu' => '',
                'kegiatan' => '',
                'status' => '',
                'tempat_lahir' => '',
                'tanggal_lahir' => '',
                'pendidikan_terakhir_id' => '',
                'ket_pendidikan_terakhir' => '',
                'tinggi_badan' => '',
                'berat_badan' => '',
                'ngaji_sunnah' => '',
                'tempat_kajian' => '',
                'tentang_kajian' => '',
                'ustadz' => '',
                'kajian_rutin' => '',
                'hijab_syari' => '',
                'niqob' => '',
                'pakaian_harian' => '',
                'ket_hobi' => '',
                'pengalaman_taaruf_offline' => '',
                'pengalaman_taaruf_online' => '',
                'target_menikah' => '',
                'siap_nikah'=> '',
                'izin_ortu' => '',
                'kriteria_pendidikan_id' => '',
                'ket_kriteria_pendidikan' => '',
                'kriteria_usia_from' => '',
                'kriteria_usia_to' => '',
                'kriteria_domisili' => '',
                'harapan_pasangan' => '',
                'kriteria_lain' => '',
                'kacamata' => '',
                'anak_ke' => '',
                'saudara' => '',
                'siap_dipoligami' => '',
                'motivasi_menikah' => '',
                'siap_ikut_suami' => '',
                'proses_terakhir' => '',
                'foto_terakhir' => '',
                'foto_ktp' => '',
            ]);

            $userAkhwatID = UserAkhwat::where('user_id', Auth::user()->id)->first()->id;
            $userAkhwat = UserAkhwat::find($userAkhwatID);
            $userAkhwat->hal_disukai = $request->hal_disuka;
            $userAkhwat->hal_taksuka = $request->hal_taksuka;
            $userAkhwat->riwayat_penyakit = $request->riwayat_penyakit;
            $userAkhwat->asal = $request->asal;
            $userAkhwat->domisili = $request->domisili;
            $userAkhwat->suku_ayah_id = $request->suku_ayah;
            $userAkhwat->suku_ibu_id = $request->suku_ibu;
            $userAkhwat->kegiatan = $request->kegiatan;
            $userAkhwat->status = $request->status;
            $userAkhwat->tempat_lahir = $request->tempat_lahir;
            $userAkhwat->tanggal_lahir = Carbon::parse($request->tanggal_lahir);
            $userAkhwat->pendidikan_terakhir_id = $request->pendidikan_terakhir_id;
            $userAkhwat->ket_pendidikan_terakhir = $request->ket_pendidikan_terakhir;
            $userAkhwat->tinggi_badan = $request->tinggi_badan;
            $userAkhwat->berat_badan = $request->berat_badan;
            $userAkhwat->tempat_ngaji = $request->tempat_kajian;
            $userAkhwat->tentang_ngaji = $request->tentang_kajian;
            $userAkhwat->ustadz = $request->ustadz;
            $userAkhwat->pakaian_harian = $request->pakaian_harian;
            $userAkhwat->anak_ke = $request->anak_ke;
            $userAkhwat->saudara = $request->saudara;
            // $userAkhwat->ket_hobi = $request->hobi;
            $userAkhwat->pengalaman_taaruf_offline = $request->pengalaman_taaruf_offline;
            $userAkhwat->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
            $userAkhwat->target_menikah = $request->target_menikah;
            $userAkhwat->siap_nikah = $request->siap_menikah;
            $userAkhwat->kriteria_pendidikan_id = $request->kriteria_pendidikan_id;
            $userAkhwat->ket_kriteria_pendidikan = $request->ket_kriteria_pendidikan;
            $userAkhwat->kriteria_domisili = $request->kriteria_domisili;
            $userAkhwat->kriteria_lain = $request->kriteria_lainnya;
            $userAkhwat->kriteria_usia_from = $request->kriteria_usia_from;
            $userAkhwat->kriteria_usia_to = $request->kriteria_usia_to;
            $userAkhwat->harapan_pasangan = $request->harapan_pasangan;
            $userAkhwat->siap_dipoligami = $request->siap_dipoligami;
            $userAkhwat->motivasi_menikah = $request->harapan_pasangan;
            $userAkhwat->siap_nikah = $request->siap_nikah;
            $userAkhwat->siap_ikut_suami = $request->siap_ikut_suami;

            // A bit tricky part
            $userAkhwat->goldar = $request->goldar;
            $userAkhwat->izin_ortu = $request->izin_ortu;
            $userAkhwat->hijab_syari = $request->hijab_syari;
            $userAkhwat->niqob = $request->niqob;
            $userAkhwat->kacamata = $request->kacamata;
            $userAkhwat->ngaji_sunnah = $request->kajian;

            if($request->hasFile('foto_ktp') && $request->file('foto_ktp')->isValid()) {
                $destinationPath = 'public/uploads/ktp_akhwat';
                $extension = $request->foto_ktp->extension();
                $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
                $request->foto_ktp->storeAs($destinationPath, $fileName);
                $userAkhwat->foto_ktp_path = $fileName;
            }

            // Insert hobby
            foreach ((array)$request->hobi as $key) {
                DetailHobi::firstOrCreate(['user_id' => Auth::user()->id, 'hobi_id' => $key]);
            }

            // Insert kebiasaan baik
            foreach ((array)$request->kebiasaan_baik as $key) {
                DetailKebiasaanBaik::firstOrCreate(['user_id' => Auth::user()->id, 'keb_baik_id' => $key]);
            }

            // Insert kebiasaan buruk
            foreach ((array)$request->kebiasaan_buruk as $key) {
                DetailKebiasaanBuruk::firstOrCreate(['user_id' => Auth::user()->id, 'keb_buruk_id' => $key]);
            }

            $userAkhwat->save();

            $user = User::find(Auth::user()->id);
            $user->first_login = true;
            $user->save();

//            dd($request);
            return redirect(route('user.dashboard'));
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
            return view('user.detaildataikhwan')->with('user', $user)->with('ownProfile', true);

        } else if(Auth::user()->userType() == 'akhwat') {
            $user = User::where('users.id', Auth::user()->id)->with('withAkhwat')->firstOrFail();
            return view('user.detaildataakhwat')->with('user', $user)->with('ownProfile', true);
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
