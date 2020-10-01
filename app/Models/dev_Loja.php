<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_Loja extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_loja";
    protected $table = "dev_Lojas";
    protected $fillable = [
        'id_loja','email','cnpj','razao_social','nome_fantasia','telefone','telefone_secundario'
    ];
}
