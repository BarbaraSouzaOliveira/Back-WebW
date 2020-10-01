<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevHorarioFuncionamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_horario_funcionamentos', function (Blueprint $table) {
            $table->bigIncrements('id_horario');
            $table->string('seg_horario_inicio');
            $table->string('seg_horario_fim');
            $table->string('ter_horario_inicio');
            $table->string('ter_horario_fim');
            $table->string('quar_horario_inicio');
            $table->string('quar_horario_fim');
            $table->string('quin_horario_inicio');
            $table->string('quin_horario_fim');
            $table->string('sex_horario_inicio');
            $table->string('sex_horario_fim');
            $table->string('sab_horario_inicio');
            $table->string('sab_horario_fim');
            $table->string('dom_horario_inicio');
            $table->string('dom_horario_fim');
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
        Schema::dropIfExists('dev_horario_funcionamentos');
    }
}
