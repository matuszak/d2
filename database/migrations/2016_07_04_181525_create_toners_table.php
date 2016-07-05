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
            $table->date('dataRecarga');

            $table->integer('id_impressora')->unsigned;
            $table->integer('id_user')->unsigned;

            $table->foreign('id_impressora')->references('id')->on('impressoras');
            $table->foreign('id_user')->references('id')->on('users');

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
