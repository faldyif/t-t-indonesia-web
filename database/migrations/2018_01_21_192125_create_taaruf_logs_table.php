<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaarufLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taaruf_logs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ikhwan_id')->unsigned();
            $table->foreign('ikhwan_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('akhwat_id')->unsigned();
            $table->foreign('akhwat_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('waktu_mulai');
            $table->timestamp('waktu_selesai')->nullable();
            $table->integer('proses_id');
            $table->integer('mediator_id')->unsigned();
            $table->foreign('mediator_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('taaruf_logs');
    }
}
