<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserIkhwansDropPendidikanKriteriaPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_ikhwans', function (Blueprint $table) {
            $table->dropColumn(['pendidikan', 'kriteria_pendidikan', 'target_menikah']);
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
            $table->string('pendidikan')->nullable();
            $table->string('kriteria_pendidikan')->nullable();
            $table->date('target_menikah')->nullable();
        });
    }
}
