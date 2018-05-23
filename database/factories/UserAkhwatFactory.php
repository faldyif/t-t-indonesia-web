<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\UserAkhwat::class, function (Faker $faker) {
    $tglLahir = $faker->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years', $timezone = null);
    $usia = $tglLahir->diff(\Carbon\Carbon::now())->y;
    $bersaudara = $faker->numberBetween($min = 1, $max = 9);
    $anakKe = $faker->numberBetween($min = 1, $max = $bersaudara);

    return [
        'user_id' => function () {
            return factory(App\User::class)->create([
                'user_type' => 3,
            ])->id;
        },
        'goldar' => $faker->randomElement($array = array ('A','B','AB','O')),
        //'keg_harian' => ucwords($faker->words($nb = 3, $asText = true)),
        'kebiasaan_baik' => ucwords($faker->words($nb = 3, $asText = true)),
        'kebiasaan_buruk' => ucwords($faker->words($nb = 3, $asText = true)),
        'hal_disukai' => ucwords($faker->words($nb = 2, $asText = true)),
        'hal_taksuka' => ucwords($faker->words($nb = 2, $asText = true)),
        'riwayat_penyakit' => ucwords($faker->words($nb = 1, $asText = true)),
        'asal' => $faker->city,
        'domisili' => $faker->city,
        //'suku' => $faker->randomElement($array = array ('Jawa','Sunda','Batak','Padang','Cina','Arab')),
        'suku_ayah_id' => $faker->randomElement($array = array ('Jawa','Sunda','Batak','Padang','Cina','Arab')),
        'suku_ibu_id' => $faker->randomElement($array = array ('Jawa','Sunda','Batak','Padang','Cina','Arab')),
        'kegiatan' => ucwords($faker->words($nb = 1, $asText = true)),
        'status' => $faker->randomElement($array = array (1,2,3)),
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => $tglLahir,
        'pendidikan_terakhir_id' => $faker->numberBetween($min = 1, $max = 9),
        'ket_pendidikan_terakhir' => ucwords($faker->words($nb = 2, $asText = true)),
        'tinggi_badan' => $faker->numberBetween($min = 150, $max = 190),
        'berat_badan' => $faker->numberBetween($min = 40, $max = 85),
        'ngaji_sunnah' => $faker->boolean,
        'tempat_ngaji' => 'Masjid Al-' . ucwords($faker->words($nb = 1, $asText = true)),
        'tentang_ngaji' => ucwords($faker->words($nb = 1, $asText = true)),
        'ustadz' => 'Ustadz ' . $faker->name,
        'kajian_rutin' => $faker->boolean,
        'hijab_syari' => $faker->boolean,
        'niqob' => $faker->boolean,
        'pakaian_harian' => ucwords($faker->words($nb = 2, $asText = true)),
        'hobi' => ucwords($faker->words($nb = 1, $asText = true)),
        'ket_hobi' => ucwords($faker->words($nb = 2, $asText = true )),
        'pengalaman_taaruf_online' => $faker->numberBetween($min = 0, $max = 5),
        'pengalaman_taaruf_offline' => $faker->numberBetween($min = 0, $max = 5),
        'target_menikah' => $faker->numberBetween($min = 2018, $max = 2022),
        'siap_nikah' => $faker->boolean,
        'izin_ortu' => $faker->boolean,
        'kriteria_pendidikan_id' => $faker->numberBetween($min = 1, $max = 9),
        'ket_kriteria_pendidikan' => ucwords($faker->words($nb = 2, $asText = true)),
        'kriteria_usia_from' => $faker->numberBetween($min = 17, $max = 20),
        'kriteria_usia_to' => $faker->numberBetween($min = $usia, $max = $usia + 5),
        'kriteria_domisili' => $faker->city,
        'harapan_pasangan' => ucwords($faker->words($nb = 3, $asText = true)),
        'kriteria_lain' => ucwords($faker->words($nb = 3, $asText = true)),
        'kacamata' => $faker->boolean,
        'anak_ke' => $anakKe,
        'saudara' => $bersaudara,
        'ciri_fisik' => ucwords($faker->words($nb = 2, $asText = true )),
        'motivasi_menikah' => ucwords($faker->words($nb = 3, $asText = true)),
        'rencana_setelah_menikah' => ucwords($faker->words($nb = 3, $asText = true)),
        'siap_dipoligami' => $faker->boolean,
        'siap_ikut_suami' => $faker->boolean,
        'proses_terakhir' => null,
        'proses_terakhir_user_id' => null,
        'foto_terakhir_path' => null,
        'foto_ktp_path' => null,
        'is_approved' => true,
        'is_data_locked' => true,
    ];
});
