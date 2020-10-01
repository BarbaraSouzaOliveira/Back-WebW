<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_Produto extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_produto";
    protected $table = "dev_produtos";
    protected $fillable = [
        'id_produto','titulo','descricao','valor','img_produto','promocao','id_gp', 'porcentagem_promocao'
    ];
}
