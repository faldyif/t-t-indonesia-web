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

            $table->integer('user_types')->unsigned();
            $table->foreign('user_types')->references('id')->on('users')->onDelete('cascade');
            $table->integer('linked_user_id')->unsigned();
            $table->foreign('linked_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('photo_path')->nullable();
            $table->text('content');

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
