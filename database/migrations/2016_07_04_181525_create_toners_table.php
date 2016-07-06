<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toners', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_recarga');

            $table->integer('impressora_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('impressora_id')->references('id')->on('impressoras');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('toners');
    }
}
