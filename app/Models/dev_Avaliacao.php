<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_Avaliacao extends Model
    {
        public $timestamps = false;
        public $primaryKey= "id_avaliacao";
        protected $table = "dev_Avaliacaos";
        protected $fillable = [
            'id_avaliacao','avaliacao'
        ];
    }
    
