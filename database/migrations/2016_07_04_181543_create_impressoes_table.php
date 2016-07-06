<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpressoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressoes', function (Blueprint $table) {
            $table->increments('id');

            $table->date('data');
            $table->char('modo', 1);
            $table->char('fv', 1);
            $table->integer('laudas');
            $table->integer('quantidade');
            $table->string('observacao', 200);


            $table->integer('cliente_id')->unsigned();
            $table->integer('impressora_id')->unsigned();
            $table->integer('imp_atividade_id')->unsigned();
            $table->integer('toner_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('impressora_id')->references('id')->on('impressoras');
            $table->foreign('imp_atividade_id')->references('id')->on('imp_atividades');
            $table->foreign('toner_id')->references('id')->on('toners');
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
        Schema::drop('impressoes');
    }
}
