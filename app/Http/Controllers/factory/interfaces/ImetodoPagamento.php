<?php
namespace App\Http\Controllers\factory\interfaces;

interface ImetodoPagamento{
    public function pagar($valor);
}