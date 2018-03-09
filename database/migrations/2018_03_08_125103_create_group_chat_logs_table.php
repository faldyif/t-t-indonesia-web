<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupChatLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_chat_logs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('taaruf_group_id')->unsigned();
            $table->foreign('taaruf_group_id')->references('id')->on('taaruf_groups')->onDelete('cascade');

            $table->text('message_json');
            
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
        Schema::dropIfExists('group_chat_logs');
    }
}
