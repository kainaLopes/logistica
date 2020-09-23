<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->date('datapedido');
            $table->string('produto');
            $table->integer('quantidadeproduto');
            $table->string('categoria');
            $table->decimal('kminicial');
            $table->decimal('kmfinal');
            $table->string('enderecoentrga');
            $table->string('enderecocoleta');
            $table->date('datasaida');
            $table->decimal('qtdcombustivel');
            $table->decimal('totaldias');
            $table->decimal('kmrodados');
            $table->decimal('valorbruto');
            $table->decimal('comissaomotorista');
            $table->decimal('valorliquido');
            $table->decimal('mediaveiculo');
            $table->date('datachegada');
            $table->decimal('despesas');
            $table->unsignedInteger('cliente_id');	
            $table->unsignedInteger('fornecedor_id');
            $table->unsignedInteger('entregador_id');
            $table->unsignedInteger('administrador_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('entregador_id')->references('id')->on('entregadores');
            $table->foreign('administrador_id')->references('id')->on('administradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
}
