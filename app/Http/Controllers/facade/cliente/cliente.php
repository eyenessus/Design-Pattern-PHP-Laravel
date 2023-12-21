<?php
namespace App\Http\Controllers\facade\cliente;

use App\Http\Controllers\facade\fachada\facadePagamento;
use App\Http\Controllers\facade\fachada\fachadaDeCompras;
use App\Http\Controllers\factoryPayments\facadePayment\facadePaymentMercadoPago;
use fachadaPadaria;

class Cliente{
    public static function comprarNaPadaria($valor){
        $fachadaPedido = new fachadaDeCompras();
        $fachadaPedido->realizarCompra($valor);
    }
    public static function SolicitarPao($valor){
        $fachadaPedido = new fachadaPadaria();
        $fachadaPedido->pedirPao(123);
    }
    public static function pagamentoSimplificado ($valor){
        $fachadaPagamento = new facadePagamento();
        $fachadaPagamento->realizarPagamento($valor);
    }
    public  static function mercadoPagoCartao(){
        $fac =  new facadePaymentMercadoPago();
       return $fac->MercadoPagoCartão();
    }
}