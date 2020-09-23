<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->increments('id');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('fornecedor_id');
            $table->unsignedInteger('funcionario_id');
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('administrador_id');
            $table->unsignedInteger('entregador_id');	
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('administrador_id')->references('id')->on('administradores');
            $table->foreign('entregador_id')->references('id')->on('entregadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboards');
    }
}
