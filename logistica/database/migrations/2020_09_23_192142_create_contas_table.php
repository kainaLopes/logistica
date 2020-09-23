<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('refeição',5,2);
            $table->decimal('borracharia',5,2);
            $table->decimal('despgerais',5,2);
            $table->decimal('combustivel',5,2);
            $table->decimal('saldo',5,2);
            $table->decimal('mecanico',5,2);
	        $table->unsignedInteger('caixa_id');
            $table->unsignedInteger('veiculo_id');	
            $table->foreign('caixa_id')->references('id')->on('caixas');	
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas');
    }
}
