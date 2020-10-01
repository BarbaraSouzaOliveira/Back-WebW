<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_Usuario extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_usuario";
    protected $table = "dev_Usuarios";
    protected $fillable = [
        'id_usuario','email','senha','cpf','nome','telefone','telefone_secundario', 'latitude','longitude','endereco','numero','complemento', 'pontos'
    ];
}
