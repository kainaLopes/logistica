<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email')->unique();
            $table->date('nascimento');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('bairro');
            $table->string('validade');
            $table->string('cep');
            $table->string('rg');
            $table->string('endereco');
            $table->string('numero');	
            $table->string('telefone');
            $table->integer('habilitacao');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('estado_id');
            $table->unsignedInteger('cidade_id');	
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('cidade_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregadores');
    }
}
