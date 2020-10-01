<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_Pedido extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_pedido";
    protected $table = "dev_Pedidos";
    protected $fillable = [
        'id_pedido',
        'descricao',
        'nome',
        'telefone',
        'endereco',
        'numero',
        'complemento',
        'pagamento',
        'obs_para_pagamento',
        'compra_total',
        'frete',
        'array'
    ];
}
