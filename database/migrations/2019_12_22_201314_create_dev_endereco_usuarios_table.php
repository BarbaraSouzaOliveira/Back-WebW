<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevEnderecoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_endereco_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_endereco');
            $table->unsignedBigInteger('id_usuario');
            $table->double('latitude', 10, 8);
            $table->double('longitude', 11, 8);    
            $table->string('endereco', 10);                 
            $table->string('numero', 10);
            $table->string('complemento', 60);
            $table->decimal('pontos')->nullable();
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
        Schema::dropIfExists('dev_endereco_usuarios');
    }
}
