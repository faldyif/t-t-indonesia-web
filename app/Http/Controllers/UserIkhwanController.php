<?php

namespace App\Http\Controllers;

use App\UserIkhwan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserIkhwanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->join('user_ikhwans', 'users.id', '=', 'user_ikhwans.user_id')->get()[0];
        return view('user.detaildataikhwan')->with('user', $user);
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
        $user = Auth::user();

        if($user->userType() != 'ikhwan') {
            Session::flash('error', 'Anda bukan ikhwan!');
            return redirect(route('user.dashboard'));
        }

        // Mandatory fields
        $userIkhwan = new UserIkhwan;
        $userIkhwan->user_id = $user->id;

        // Optional fields
        $userIkhwan->goldar = $request->goldar;
        $userIkhwan->keg_harian = $request->keg_harian;
        $userIkhwan->kebiasaan_baik = $request->kebiasaan_baik;
        $userIkhwan->kebiasaan_buruk = $request->kebiasaan_buruk;
        $userIkhwan->hal_disukai = $request->hal_disukai;
        $userIkhwan->hal_taksuka = $request->hal_taksuka;
        $userIkhwan->riwayat_kesehatan = $request->riwayat_kesehatan;
        $userIkhwan->asal = $request->asal;
        $userIkhwan->domisili = $request->domisili;
        $userIkhwan->suku = $request->suku;
        $userIkhwan->suku_ayah = $request->suku_ayah;
        $userIkhwan->suku_ibu = $request->suku_ibu;
        $userIkhwan->pekerjaan = $request->pekerjaan;
        $userIkhwan->status = $request->status;
        $userIkhwan->tempat_lahir = $request->tempat_lahir;
        $userIkhwan->tanggal_lahir = $request->tanggal_lahir;
        $userIkhwan->pendidikan = $request->pendidikan;
        $userIkhwan->ket_pendidikan_terakhir = $request->ket_pendidikan_terakhir;
        $userIkhwan->tinggi_badan = $request->tinggi_badan;
        $userIkhwan->berat_badan = $request->berat_badan;
        $userIkhwan->ngaji_sunnah = $request->ngaji_sunnah;
        $userIkhwan->tempat_ngaji = $request->tempat_ngaji;
        $userIkhwan->tentang_ngaji = $request->tentang_ngaji;
        $userIkhwan->ustadz = $request->ustadz;
        $userIkhwan->kajian_rutin = $request->kajian_rutin;
        $userIkhwan->celana = $request->celana;
        $userIkhwan->pakaian_harian = $request->pakaian_harian;
        $userIkhwan->hobi = $request->hobi;
        $userIkhwan->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
        $userIkhwan->pengalaman_taaruf_offilne = $request->pengalaman_taaruf_offilne;
        $userIkhwan->target_menikah = $request->target_menikah;
        $userIkhwan->siap_nikah = $request->siap_nikah;
        $userIkhwan->sholat = $request->sholat;
        $userIkhwan->merokok = $request->merokok;
        $userIkhwan->kriteria_pendidikan = $request->kriteria_pendidikan;
        $userIkhwan->kriteria_usia_from = $request->kriteria_usia_from;
        $userIkhwan->kriteria_usia_to = $request->kriteria_usia_to;
        $userIkhwan->kriteria_domisili = $request->kriteria_domisili;
        $userIkhwan->harapan_pasangan = $request->harapan_pasangan;
        $userIkhwan->kriteria_lain = $request->kriteria_lain;
        $userIkhwan->kacamata = $request->kacamata;
        $userIkhwan->anak_ke = $request->anak_ke;
        $userIkhwan->saudara = $request->saudara;
        $userIkhwan->ciri_fisik = $request->ciri_fisik;
        $userIkhwan->motivasi_menikah = $request->motivasi_menikah;
        $userIkhwan->rencana_setelah_menikah = $request->rencana_setelah_menikah;
        $userIkhwan->proses_terakhir = 0;

        $userIkhwan->save();

        $user->linked_id = $userIkhwan->id;
        $user->touch();

        Session::flash('message', 'Berhasil menyimpan perubahan profil!');
        return redirect(route('user.dashboard'));
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
        $user = Auth::user();

        if($user->userType() != 'ikhwan') {
            Session::flash('error', 'Anda bukan ikhwan!');
            return redirect(route('user.dashboard'));
        }

        // Mandatory fields
        $userIkhwan = UserIkhwan::find($user->linked_id);

        // Optional fields
        $userIkhwan->goldar = $request->goldar;
        $userIkhwan->keg_harian = $request->keg_harian;
        $userIkhwan->kebiasaan_baik = $request->kebiasaan_baik;
        $userIkhwan->kebiasaan_buruk = $request->kebiasaan_buruk;
        $userIkhwan->hal_disukai = $request->hal_disukai;
        $userIkhwan->hal_taksuka = $request->hal_taksuka;
        $userIkhwan->riwayat_kesehatan = $request->riwayat_kesehatan;
        $userIkhwan->asal = $request->asal;
        $userIkhwan->domisili = $request->domisili;
        $userIkhwan->suku = $request->suku;
        $userIkhwan->suku_ayah = $request->suku_ayah;
        $userIkhwan->suku_ibu = $request->suku_ibu;
        $userIkhwan->kegiatan = $request->kegiatan;
        $userIkhwan->status = $request->status;
        $userIkhwan->tempat_lahir = $request->tempat_lahir;
        $userIkhwan->tanggal_lahir = $request->tanggal_lahir;
        $userIkhwan->pendidikan = $request->pendidikan;
        $userIkhwan->tinggi_badan = $request->tinggi_badan;
        $userIkhwan->berat_badan = $request->berat_badan;
        $userIkhwan->ngaji_sunnah = $request->ngaji_sunnah;
        $userIkhwan->tempat_ngaji = $request->tempat_ngaji;
        $userIkhwan->tentang_ngaji = $request->tentang_ngaji;
        $userIkhwan->ustadz = $request->ustadz;
        $userIkhwan->kajian_rutin = $request->kajian_rutin;
        $userIkhwan->celana = $request->celana;
        $userIkhwan->pakaian_harian = $request->pakaian_harian;
        $userIkhwan->hobi = $request->hobi;
        $userIkhwan->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
        $userIkhwan->pengalaman_taaruf_offilne = $request->pengalaman_taaruf_offilne;
        $userIkhwan->target_menikah = $request->target_menikah;
        $userIkhwan->siap_nikah = $request->siap_nikah;
        $userIkhwan->sholat = $request->sholat;
        $userIkhwan->merokok = $request->merokok;
        $userIkhwan->kriteria_pendidikan = $request->kriteria_pendidikan;
        $userIkhwan->kriteria_usia_from = $request->kriteria_usia_from;
        $userIkhwan->kriteria_usia_to = $request->kriteria_usia_to;
        $userIkhwan->kriteria_domisili = $request->kriteria_domisili;
        $userIkhwan->harapan_pasangan = $request->harapan_pasangan;
        $userIkhwan->kriteria_lain = $request->kriteria_lain;
        $userIkhwan->anak_ke = $request->anak_ke;
        $userIkhwan->saudara = $request->saudara;
        $userIkhwan->kacamata = $request->kacamata;

        $userIkhwan->save();

        Session::flash('message', 'Berhasil menyimpan perubahan profil!');
        return redirect(route('user.dashboard'));
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
