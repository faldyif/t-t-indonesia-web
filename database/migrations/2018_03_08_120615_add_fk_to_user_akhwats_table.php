<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToUserAkhwatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_akhwats', function (Blueprint $table) {
            $table->integer('pendidikan_terakhir_id')->unsigned()->nullable()->after('tanggal_lahir');
            $table->foreign('pendidikan_terakhir_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');

            $table->integer('kriteria_pendidikan_id')->unsigned()->nullable()->after('izin_ortu');
            $table->foreign('kriteria_pendidikan_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');
           
            $table->integer('proses_terakhir_user_id')->unsigned()->nullable()->after('proses_terakhir');
            $table->foreign('proses_terakhir_user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_akhwats', function (Blueprint $table) {
            //
        });
    }
}
