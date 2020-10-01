<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_lojas', function (Blueprint $table) {
            $table->bigIncrements('id_loja');
            $table->string('email');
            $table->string('senha');
            $table->string('cnpj', 30);
            $table->string('cpf', 14);
            $table->string('nome_fantasia',60);
            $table->string('telefone', 12);
            $table->string('telefone_secundario', 12);
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
        Schema::dropIfExists('dev_lojas');
    }
}
