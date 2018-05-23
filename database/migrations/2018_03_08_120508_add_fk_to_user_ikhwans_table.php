<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToUserIkhwansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_ikhwans', function (Blueprint $table) {
            $table->foreign('pendidikan_terakhir_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');
            $table->foreign('kriteria_pendidikan_id')->references('id')->on('jenjang_pendidikans')->onDelete('cascade');
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
        Schema::table('user_ikhwans', function (Blueprint $table) {
            //
        });
    }
}
