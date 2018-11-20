<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePassagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passagem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_passageiro');
            $table->string('rg');
            $table->string('orgao_expeditor');
            $table->string('estado');
            $table->date('data_expedicao');
            $table->unsignedInteger('venda_id');
            $table->foreign('venda_id')->references('id')->on('venda')->onDelete('cascade');
            $table->dateTime('deleted_at');
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
        $table->dropForeign(['venda_id']);
        Schema::dropIfExists('passagem');
    }
}
