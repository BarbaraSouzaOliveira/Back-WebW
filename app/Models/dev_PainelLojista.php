<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_PainelLojista extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_painel";
    protected $table = "dev_Painel_Lojistas";
    protected $fillable = [
        'id_painel',
        'cor_primaria',
        'cor_secundaria',
        'img_perfil',
        'img_banner',
        'descricao_loja',
        'titulo_loja',
        'tempo_espera',
        'retirada_loja',
        'pagamento_entrega',
        'pagamento_paypal',
        'credito',
        'debito',
        'dinheiro',
        'obs_pagamento',
        'cupom_real',
        'ponto_real',
        'ponto_gerado',
        'comprado_real'
    ];
}
