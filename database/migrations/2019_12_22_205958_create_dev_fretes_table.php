<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevFretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_fretes', function (Blueprint $table) {
            $table->bigIncrements('id_frete');
            $table->string('distancia1');
            $table->string('distancia2');
            $table->string('distancia3');
            $table->string('distancia4');
            $table->string('valor1');
            $table->string('valor2');
            $table->string('valor3');
            $table->string('valor4');
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
        Schema::dropIfExists('dev_fretes');
    }
}
