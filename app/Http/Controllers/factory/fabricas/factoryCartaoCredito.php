<?php 
namespace App\Http\Controllers\factory\fabricas;

use App\Http\Controllers\factory\interfaces\factoryPagamento;
use App\Http\Controllers\factory\produtos\cartaoCredito;

class factoryCartaoCredito implements factoryPagamento{
    public function inicializarPagamento(){
        return new cartaoCredito();
    }
} 