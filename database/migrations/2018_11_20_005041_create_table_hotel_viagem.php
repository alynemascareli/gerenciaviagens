<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHotelViagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_viagem', function (Blueprint $table) {
            $table->unsignedInteger('hotel_id)');
            $table->foreign('hotel_id)')->references('id')->on('hotel')->onDelete('cascade');

            $table->unsignedInteger('viagem_id');
            $table->foreign('viagem_id')->references('id')->on('viagem')->onDelete('cascade');

            $table->unsignedInteger('empresa_id');
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
        $table->dropForeign(['hotel_id']);
        $table->dropForeign(['viagem_id']);
        $table->dropForeign(['empresa_id']);
        Schema::dropIfExists('hotel_viagem');
    }
}
