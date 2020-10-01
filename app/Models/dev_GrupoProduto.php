<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_GrupoProduto extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_gp";
    protected $table = "dev_grupo_produtos";
    protected $fillable = [
        'id_gp','descricao'
    ];
}
