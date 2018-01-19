<?php

namespace App\Http\Controllers;

use App\UserAkhwat;
use Illuminate\Http\Request;
use Session;

class UserAkhwatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if($user->userType() != 'akhwat') {
            Session::flash('error', 'Anda bukan akhwat!');
            return redirect(route('user.dashboard'));
        }

        // Mandatory fields
        $userAkhwat = new UserAkhwat;
        $userAkhwat->user_id = $user->id;

        // Optional fields
        $userAkhwat->goldar = $request->goldar;
        $userAkhwat->keg_harian = $request->keg_harian;
        $userAkhwat->kebiasaan_baik = $request->kebiasaan_baik;
        $userAkhwat->kebiasaan_buruk = $request->kebiasaan_buruk;
        $userAkhwat->hal_disukai = $request->hal_disukai;
        $userAkhwat->hal_taksuka = $request->hal_taksuka;
        $userAkhwat->riwayat_kesehatan = $request->riwayat_kesehatan;
        $userAkhwat->asal = $request->asal;
        $userAkhwat->domisili = $request->domisili;
        $userAkhwat->suku = $request->suku;
        $userAkhwat->suku_ayah = $request->suku_ayah;
        $userAkhwat->suku_ibu = $request->suku_ibu;
        $userAkhwat->kegiatan = $request->kegiatan;
        $userAkhwat->status = $request->status;
        $userAkhwat->tempat_lahir = $request->tempat_lahir;
        $userAkhwat->tanggal_lahir = $request->tanggal_lahir;
        $userAkhwat->pendidikan = $request->pendidikan;
        $userAkhwat->tinggi_badan = $request->tinggi_badan;
        $userAkhwat->berat_badan = $request->berat_badan;
        $userAkhwat->ngaji_sunnah = $request->ngaji_sunnah;
        $userAkhwat->tempat_ngaji = $request->tempat_ngaji;
        $userAkhwat->tentang_ngaji = $request->tentang_ngaji;
        $userAkhwat->ustadz = $request->ustadz;
        $userAkhwat->kajian_rutin = $request->kajian_rutin;
        $userAkhwat->hijab_syari = $request->hijab_syari;
        $userAkhwat->niqob = $request->niqob;
        $userAkhwat->pakaian_harian = $request->pakaian_harian;
        $userAkhwat->hobi = $request->hobi;
        $userAkhwat->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
        $userAkhwat->pengalaman_taaruf_offilne = $request->pengalaman_taaruf_offilne;
        $userAkhwat->target_menikah = $request->target_menikah;
        $userAkhwat->siap_nikah = $request->siap_nikah;
        $userAkhwat->izin_ortu = $request->izin_ortu;
        $userAkhwat->kriteria_pendidikan = $request->kriteria_pendidikan;
        $userAkhwat->kriteria_usia_from = $request->kriteria_usia_from;
        $userAkhwat->kriteria_usia_to = $request->kriteria_usia_to;
        $userAkhwat->kriteria_domisili = $request->kriteria_domisili;
        $userAkhwat->harapan_pasangan = $request->harapan_pasangan;
        $userAkhwat->kriteria_lain = $request->kriteria_lain;
        $userAkhwat->kacamata = $request->kacamata;
        $userAkhwat->proses_terakhir = 0;

        $userAkhwat->save();

        $user->linked_id = $userAkhwat->id;
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

        if($user->userType() != 'akhwat') {
            Session::flash('error', 'Anda bukan akhwat!');
            return redirect(route('user.dashboard'));
        }

        // Mandatory fields
        $userAkhwat = UserAkhwat::find($user->linked_id);

        // Optional fields
        $userAkhwat->goldar = $request->goldar;
        $userAkhwat->keg_harian = $request->keg_harian;
        $userAkhwat->kebiasaan_baik = $request->kebiasaan_baik;
        $userAkhwat->kebiasaan_buruk = $request->kebiasaan_buruk;
        $userAkhwat->hal_disukai = $request->hal_disukai;
        $userAkhwat->hal_taksuka = $request->hal_taksuka;
        $userAkhwat->riwayat_kesehatan = $request->riwayat_kesehatan;
        $userAkhwat->asal = $request->asal;
        $userAkhwat->domisili = $request->domisili;
        $userAkhwat->suku = $request->suku;
        $userAkhwat->suku_ayah = $request->suku_ayah;
        $userAkhwat->suku_ibu = $request->suku_ibu;
        $userAkhwat->kegiatan = $request->kegiatan;
        $userAkhwat->status = $request->status;
        $userAkhwat->tempat_lahir = $request->tempat_lahir;
        $userAkhwat->tanggal_lahir = $request->tanggal_lahir;
        $userAkhwat->pendidikan = $request->pendidikan;
        $userAkhwat->tinggi_badan = $request->tinggi_badan;
        $userAkhwat->berat_badan = $request->berat_badan;
        $userAkhwat->ngaji_sunnah = $request->ngaji_sunnah;
        $userAkhwat->tempat_ngaji = $request->tempat_ngaji;
        $userAkhwat->tentang_ngaji = $request->tentang_ngaji;
        $userAkhwat->ustadz = $request->ustadz;
        $userAkhwat->kajian_rutin = $request->kajian_rutin;
        $userAkhwat->hijab_syari = $request->hijab_syari;
        $userAkhwat->niqob = $request->niqob;
        $userAkhwat->pakaian_harian = $request->pakaian_harian;
        $userAkhwat->hobi = $request->hobi;
        $userAkhwat->pengalaman_taaruf_online = $request->pengalaman_taaruf_online;
        $userAkhwat->pengalaman_taaruf_offilne = $request->pengalaman_taaruf_offilne;
        $userAkhwat->target_menikah = $request->target_menikah;
        $userAkhwat->siap_nikah = $request->siap_nikah;
        $userAkhwat->izin_ortu = $request->izin_ortu;
        $userAkhwat->kriteria_pendidikan = $request->kriteria_pendidikan;
        $userAkhwat->kriteria_usia_from = $request->kriteria_usia_from;
        $userAkhwat->kriteria_usia_to = $request->kriteria_usia_to;
        $userAkhwat->kriteria_domisili = $request->kriteria_domisili;
        $userAkhwat->harapan_pasangan = $request->harapan_pasangan;
        $userAkhwat->kriteria_lain = $request->kriteria_lain;
        $userAkhwat->kacamata = $request->kacamata;

        $userAkhwat->save();

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
