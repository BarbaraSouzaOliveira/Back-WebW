<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('email');
            $table->string('senha');
            $table->string('cpf', 14);
            $table->string('nome',60);
            $table->string('telefone', 12);
            $table->string('telefone_secundario', 12);            
            $table->double('latitude');
            $table->double('longitude');    
            $table->string('endereco');                 
            $table->string('numero');
            $table->string('complemento');
            $table->string('pontos');
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
        Schema::dropIfExists('dev_usuarios');
    }
}
