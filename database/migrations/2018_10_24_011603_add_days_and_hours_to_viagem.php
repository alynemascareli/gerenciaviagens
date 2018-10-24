<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDaysAndHoursToViagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('viagem', function (Blueprint $table) {
            $table->dateTime('data_saida');
            $table->dateTime('data_retorno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('viagem', function (Blueprint $table) {
            $table->dateTime('data_saida');
            $table->dateTime('data_retorno');
        });
    }
}
