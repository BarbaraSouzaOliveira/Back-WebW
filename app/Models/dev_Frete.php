<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_Frete extends Model
{
    public $timestamps = false;
    public $primaryKey= "id_frete";
    protected $table = "dev_Fretes";
    protected $fillable = [
        'id_frete','distancia1','valor1','distancia2','valor2','distancia3','valor3','distancia4','valor4'
    ];
}
