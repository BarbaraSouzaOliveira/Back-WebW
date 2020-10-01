<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_HorarioFuncionamento extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_horario";
    protected $table = "dev_Horario_Funcionamentos";
    protected $fillable = [
      'id_horario', 'seg_horario_inicio', 'seg_horario_fim' , 'ter_horario_inicio', 'ter_horario_fim', 'quar_horario_inicio', 'quar_horario_fim', 'quin_horario_inicio', 'quin_horario_fim', 'sex_horario_inicio', 'sex_horario_fim', 'sab_horario_inicio', 'sab_horario_fim', 'dom_horario_inicio', 'dom_horario_fim'
    ];
}
