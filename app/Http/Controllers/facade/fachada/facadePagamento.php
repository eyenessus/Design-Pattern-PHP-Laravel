<?php

namespace App\Http\Controllers\facade\fachada;

use App\Http\Controllers\factory\fabricas\factoryCartaoCredito;

class facadePagamento
{
    protected $pagamento;
    public function __construct()
    {
        $this->pagamento = new factoryCartaoCredito();
    }

    public function realizarPagamento($val)
    {
        $pag = $this->pagamento->inicializarPagamento();
        $pag->pagar($val);
    }
}
