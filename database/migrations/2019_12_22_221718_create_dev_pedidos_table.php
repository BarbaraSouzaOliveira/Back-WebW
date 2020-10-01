<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id_pedido');
            $table->string('descricao'); 
            $table->string('nome'); 
            $table->string('telefone'); 
            $table->string('endereco'); 
            $table->string('numero'); 
            $table->string('complemento'); 
            $table->string('pagamento');
            $table->string('obs_para_pagamento',150);
            $table->double('compra_total');
            $table->double('frete');
            $table->string('array');            
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
        Schema::dropIfExists('dev_pedidos');
    }
}
