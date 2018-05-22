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

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('goldar',2)->nullable();
            $table->string('hal_disukai')->nullable();
            $table->string('hal_taksuka')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->string('asal')->nullable();
            $table->string('domisili')->nullable();
            $table->integer('suku_ayah_id')->unsigned()->nullable();
            $table->foreign('suku_ayah_id')->references('id')->on('suku')->onDelete('cascade');
            $table->integer('suku_ibu_id')->unsigned()->nullable();
            $table->foreign('suku_ibu_id')->references('id')->on('suku')->onDelete('cascade');
            $table->string('kegiatan')->nullable();
            $table->integer('status')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();

            $table->integer('pendidikan_terakhir_id')->unsigned()->nullable()->after('tanggal_lahir');
            $table->foreign('pendidikan_terakhir_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');

            $table->string('ket_pendidikan_terakhir')->nullable();
            $table->double('tinggi_badan')->nullable();
            $table->double('berat_badan')->nullable();
            $table->boolean('ngaji_sunnah')->nullable();
            $table->string('tempat_ngaji')->nullable();
            $table->string('tentang_ngaji')->nullable();
            $table->string('ustadz')->nullable();
            $table->string('kajian_rutin')->nullable();
            $table->boolean('hijab_syari')->nullable();
            $table->boolean('niqob')->nullable();
            $table->string('pakaian_harian')->nullable();
            $table->string('ket_hobi')->nullable();
            $table->integer('pengalaman_taaruf_online')->nullable();
            $table->integer('pengalaman_taaruf_offline')->nullable();
            $table->year('target_menikah')->nullable();
            $table->boolean('siap_nikah')->nullable();
            $table->boolean('izin_ortu')->nullable();

            $table->integer('kriteria_pendidikan_id')->unsigned()->nullable()->after('izin_ortu');
            $table->foreign('kriteria_pendidikan_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');

            $table->string('ket_kriteria_pendidikan')->nullable();
            $table->integer('kriteria_usia_from')->nullable();
            $table->integer('kriteria_usia_to')->nullable();
            $table->string('kriteria_domisili')->nullable();
            $table->string('harapan_pasangan')->nullable();
            $table->string('kriteria_lain')->nullable();
            $table->boolean('kacamata')->nullable();

            $table->integer('anak_ke')->nullable();
            $table->integer('saudara')->nullable();

            $table->boolean('siap_dipoligami')->nullable();
            $table->string('motivasi_menikah')->nullable();
            $table->boolean('siap_ikut_suami')->nullable();
            $table->integer('proses_terakhir')->nullable();

            $table->integer('proses_terakhir_user_id')->unsigned()->nullable()->after('proses_terakhir');
            $table->foreign('proses_terakhir_user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->string('foto_terakhir_path')->nullable();
            $table->string('foto_ktp_path')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_data_locked')->default(0);

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
