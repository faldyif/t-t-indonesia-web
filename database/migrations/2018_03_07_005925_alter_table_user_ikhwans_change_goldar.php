<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserIkhwansChangeGoldar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_ikhwans', function (Blueprint $table) {
            $table->string('goldar',2)->change();
            $table->renameColumn('pengalaman_taaruf_offilne','pengalaman_taaruf_offline');
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
