<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOnibusViagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onibus_viagem', function (Blueprint $table) {
            $table->unsignedInteger('viagem_id');
            $table->foreign('viagem_id')->references('id')->on('viagem')->onDelete('cascade');

            $table->unsignedInteger('onibus_id');
            $table->foreign('onibus_id')->references('id')->on('onibus')->onDelete('cascade');

            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');

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
        $table->dropForeign(['viagem_id']);
        $table->dropForeign(['onibus_id']);
        $table->dropForeign(['empresa_id']);

        Schema::dropIfExists('onibus_viagem');
    }
}
