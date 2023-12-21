<?php
namespace App\Http\Controllers\factory\produtos;
use App\Http\Controllers\factory\interfaces\ImetodoPagamento;

class cartaoCredito implements ImetodoPagamento{
    public function pagar($valor){
        return dd('pagamento realizado com o cartao de credito');
    }
}