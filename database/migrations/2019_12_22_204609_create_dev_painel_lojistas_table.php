<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevPainelLojistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_painel_lojistas', function (Blueprint $table) {
            $table->bigIncrements('id_painel');
            $table->string('cor_primaria', 10);
            $table->string('cor_secundaria', 10);
            $table->string('img_perfil');
            $table->string('img_banner');
            $table->string('titulo_loja');
            $table->string('descricao_loja');
            $table->double('tempo_espera');
            $table->boolean('retirada_loja');
            $table->boolean('pagamento_entrega');
            $table->boolean('pagamento_paypal');
            $table->boolean('credito');
            $table->boolean('debito');
            $table->boolean('dinheiro');
            $table->string('obs_pagamento')->nullable();
            $table->double('comprado_real');
            $table->double('ponto_gerado');
            $table->double('ponto_real');
            $table->double('cupom_real');            
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
        Schema::dropIfExists('dev_painel_lojistas');
    }
}
