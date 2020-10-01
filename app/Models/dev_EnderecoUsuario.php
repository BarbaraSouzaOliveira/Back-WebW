<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_EnderecoUsuario extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_endereco";
    protected $table = "dev_Endereco_Usuarios";
    protected $fillable = [
        'id_endereco','latitude','longitude','endereco','numero','complemento'
    ];
}
