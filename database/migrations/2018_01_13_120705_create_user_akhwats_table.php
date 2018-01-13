<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAkhwatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_akhwats', function (Blueprint $table) {
            $table->increments('id');
            $table->char('goldar');
            $table->string('keg_harian');
            $table->string('kebiasaan_baik');
            $table->string('kebiasaan_buruk');
            $table->string('hal_disukai');
            $table->string('hal_taksuka');
            $table->string('riwayat_kesehatan');
            $table->string('asal');
            $table->string('domisili');
            $table->string('suku');
            $table->string('suku_ayah');
            $table->string('suku_ibu');
            $table->string('kegiatan');
            $table->string('status');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pendidikan');
            $table->int('tinggi_badan');
            $table->int('berat_badan');
            $table->boolean('ngaji_sunnah');
            $table->string('tempat_ngaji');
            $table->string('tentang_ngaji');
            $table->string('ustadz');
            $table->string('kajian_rutin');
            $table->boolean('hijab_syari');
            $table->boolean('niqob');
            $table->string('pakaian_harian');
            $table->string('hobi');
            $table->int('pengalaman_taaruf_online');
            $table->int('pengalaman_taaruf_offilne');
            $table->date('target_menikah');
            $table->boolean('siap_nikah');
            $table->boolean('izin_ortu');
            $table->string('kriteria_pendidikan');
            $table->string('kriteria_usia_from');
            $table->int('kriteria_usia_to');
            $table->int('kriteria_domisili');
            $table->string('kriteria_domisili');
            $table->string('harapan_pasangan');
            $table->string('kriteria_lain');
            $table->boolean('kacamata');
            $table->int('proses_terakhir');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_akhwats');
    }
}
