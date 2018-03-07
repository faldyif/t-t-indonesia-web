<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMultipleColumnToUserIkhwans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_ikhwans', function (Blueprint $table) {
            $table->integer('pendidikan_terakhir_id')->unsigned()->nullable()->after('tanggal_lahir');
            $table->foreign('pendidikan_terakhir_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');

            $table->string('ket_pendidikan_terakhir')->nullable()->after('pendidikan_terakhir_id');

            $table->integer('kriteria_pendidikan_id')->unsigned()->nullable()->after('merokok');
            $table->foreign('kriteria_pendidikan_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');

            $table->string('ket_kriteria_pendidikan')->nullable()->after('kriteria_pendidikan_id');

            $table->integer('proses_terakhir_user_id')->unsigned()->nullable()->after('proses_terakhir');
            $table->foreign('proses_terakhir_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->year('target_menikah')->after('pengalaman_taaruf_offline');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
