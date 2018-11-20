<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('quantidade');

            $table->string('confimacao');

            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');

            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->unsignedInteger('viagem_id');
            $table->foreign('viagem_id')->references('id')->on('viagem')->onDelete('cascade');

            $table->unsignedInteger('tipo_pagamento_id');
            $table->foreign('tipo_pagamento_id')->references('id')->on('tipo_pagamento')->onDelete('cascade');



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
        $table->dropForeign(['empresa_id']);
        $table->dropForeign(['cliente_id']);
        $table->dropForeign(['viagem_id']);
        $table->dropForeign(['tipo_pagamento_id']);
        Schema::dropIfExists('venda');
    }
}
