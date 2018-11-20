<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMotoristaViagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorista_viagem', function (Blueprint $table) {
            $table->unsignedInteger('viagem_id');
            $table->foreign('viagem_id')->references('id')->on('viagem')->onDelete('cascade');

            $table->unsignedInteger('motorista_id');
            $table->foreign('motorista_id')->references('id')->on('motorista')->onDelete('cascade');
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
        $table->dropForeign(['motorista_id']);
        Schema::dropIfExists('motorista_viagem');
    }
}
