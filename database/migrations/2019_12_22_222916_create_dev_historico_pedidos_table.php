<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevHistoricoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_historico_pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pedido');
            $table->primary('id_pedido');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_pedido')->references('id_pedido')->on('dev_pedidos');
            $table->foreign('id_usuario')->references('id_usuario')->on('dev_usuarios');
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
        Schema::dropIfExists('dev_historico_pedidos');
    }
}
