<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_type')->unsigned();
            $table->foreign('user_type')->references('id')->on('user_types')->onDelete('cascade');

            $table->integer('from_user_id')->unsigned();
            $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('to_user_id')->unsigned();
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->boolean('is_taadud');
            $table->timestamp('propose_time');
            $table->timestamp('expire_time');
            $table->boolean('deleted');
            
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
        Schema::dropIfExists('proposals');
    }
}
