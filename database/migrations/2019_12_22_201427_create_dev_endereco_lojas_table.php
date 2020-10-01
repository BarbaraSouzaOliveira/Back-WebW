<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevEnderecoLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_endereco_lojas', function (Blueprint $table) {
            $table->bigIncrements('id_endereco');
            // $table->unsignedBigInteger('id_loja');
            $table->double('latitude', 10, 8);
            $table->double('longitude', 11, 8);    
            $table->string('endereco', 200);                 
            $table->string('numero', 10);
            $table->string('complemento', 200);
            // $table->foreign('id_loja')->references('id_loja')->on('dev_lojas');
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
        Schema::dropIfExists('dev_endereco_lojas');
    }
}
