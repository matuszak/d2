<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('email', 125)->unique();
            $table->string('materia', 50);
            $table->string('fone1', 17);
            $table->string('fone2', 17);

            $table->integer('setor_id')->unsigned();

            $table->foreign('setor_id')->references('id')->on('setores');

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
        Schema::drop('clientes');
    }
}
