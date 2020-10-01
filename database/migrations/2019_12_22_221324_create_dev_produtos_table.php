<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_produtos', function (Blueprint $table) {
            $table->bigIncrements('id_produto');
            $table->string('titulo',60);
            $table->text('descricao');
            $table->double('valor');
            $table->double('porcentagem_promocao');
            $table->string('img_produto');
            $table->boolean('promocao');
            $table->unsignedBigInteger('id_gp');
            $table->foreign('id_gp')->references('id_gp')->on('dev_grupo_produtos');
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
        Schema::dropIfExists('dev_produtos');
    }
}
