<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('valor', 8, 2);

            $table->longText('descricao');
            $table->string('parcela');

            $table->date('vencimento');
            $table->date('pagamento');

            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');

            $table->unsignedInteger('venda_id');
            $table->foreign('venda_id')->references('id')->on('venda')->onDelete('cascade');
            
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
        $table->dropForeign(['venda_id']);
        Schema::dropIfExists('pagamento');
    }
}
