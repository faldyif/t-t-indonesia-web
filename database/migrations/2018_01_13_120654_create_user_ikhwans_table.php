<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIkhwansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ikhwans', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->char('goldar')->nullable();
            $table->string('keg_harian')->nullable();
            $table->string('kebiasaan_baik')->nullable();
            $table->string('kebiasaan_buruk')->nullable();
            $table->string('hal_disukai')->nullable();
            $table->string('hal_taksuka')->nullable();
            $table->string('riwayat_kesehatan')->nullable();
            $table->string('asal')->nullable();
            $table->string('domisili')->nullable();
            $table->string('suku')->nullable();
            $table->string('suku_ayah')->nullable();
            $table->string('suku_ibu')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('status')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->double('tinggi_badan')->nullable();
            $table->double('berat_badan')->nullable();
            $table->boolean('ngaji_sunnah')->nullable();
            $table->string('tempat_ngaji')->nullable();
            $table->string('tentang_ngaji')->nullable();
            $table->string('ustadz')->nullable();
            $table->string('kajian_rutin')->nullable();
            $table->string('celana')->nullable();
            $table->string('pakaian_harian')->nullable();
            $table->string('hobi')->nullable();
            $table->integer('pengalaman_taaruf_online')->nullable();
            $table->integer('pengalaman_taaruf_offilne')->nullable();
            $table->date('target_menikah')->nullable();
            $table->boolean('siap_nikah')->nullable();
            $table->boolean('sholat')->nullable();
            $table->boolean('merokok')->nullable();
            $table->string('kriteria_pendidikan')->nullable();
            $table->integer('kriteria_usia_from')->nullable();
            $table->integer('kriteria_usia_to')->nullable();
            $table->string('kriteria_domisili')->nullable();
            $table->string('harapan_pasangan')->nullable();
            $table->string('kriteria_lain')->nullable();
            $table->boolean('kacamata')->nullable();
            $table->integer('proses_terakhir')->nullable();

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
        Schema::dropIfExists('user_ikhwans');
    }
}
