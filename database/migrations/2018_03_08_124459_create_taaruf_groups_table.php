<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaarufGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taaruf_groups', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ikhwan_id')->unsigned();
            $table->foreign('ikhwan_id')->references('id')->on('users')->onDelete('cascade');
            
            
            $table->integer('akhwat_id')->unsigned();
            $table->foreign('akhwat_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->integer('mediator_id')->unsigned();
            $table->foreign('mediator_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->integer('taaruf_log_terakhir_id')->unsigned();
            $table->foreign('taaruf_log_terakhir_id')->references('id')->on('taaruf_logs')->onDelete('cascade');
            
            $table->integer('proses_terakhir_id');
            
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
        Schema::dropIfExists('taaruf_groups');
    }
}
