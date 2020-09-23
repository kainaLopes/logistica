<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cpf');
            $table->string('cnpj');
            $table->date('nascimento');
	        $table->string('numero');
            $table->string('bairro');
            $table->string('endereco');
            $table->integer('quantidadepedidos');
            $table->string('telefone');
            $table->string('password');
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
        Schema::dropIfExists('fornecedores');
    }
}
