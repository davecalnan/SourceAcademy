<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_id');
            $table->string('team_domain');
            $table->string('channel_id');
            $table->string('channel_name');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('command');
            $table->string('text');
            $table->string('response_url');
            $table->string('trigger_id');
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
        Schema::dropIfExists('dones');
    }
}
