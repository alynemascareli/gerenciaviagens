<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pessoa_id');
            $table->unsignedInteger('empresa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');
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
        $table->dropForeign(['pessoa_id']);
        $table->dropForeign(['empresa_id']);
        Schema::dropIfExists('cliente');
    }
}
