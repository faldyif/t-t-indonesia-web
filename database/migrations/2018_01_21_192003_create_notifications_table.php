<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('dari_user_id')->unsigned();
            $table->foreign('dari_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('ke_user_id')->unsigned();
            $table->foreign('ke_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->default(false);
            $table->string('title');
            $table->string('photo_path')->nullable();
            $table->text('content');c

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
        Schema::dropIfExists('notifications');
    }
}
