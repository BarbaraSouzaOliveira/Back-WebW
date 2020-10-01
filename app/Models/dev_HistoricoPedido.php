<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_HistoricoPedido extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_pedido";
    protected $table = "dev_Historico_Pedidos";
    protected $fillable = [
        'id_pedido','id_usuario'
    ];
}
