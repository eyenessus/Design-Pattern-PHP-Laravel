<?php

namespace App\Http\Controllers;

use App\Http\Controllers\facade\cliente\Cliente;
use App\Http\Controllers\factory\fabricas\factoryCartaoCredito;
use App\Http\Controllers\factoryPayments\FactoryPaymentConcret;
use App\Http\Controllers\singleton\Singleton as SingletonSingleton;

class TesteController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        
        //singleton uma unica instancia
        $sing = SingletonSingleton::getInstance();
       //   $sing->pagamentoSeguro();

        //factory method retorna objetos correspondente e aumento de flexibilidade do codigo
        $pay = new FactoryPaymentConcret();
        $paypal = $pay->MercadoPago(); 
        //$paypal->pix();

        Cliente::mercadoPagoCartao();



        //Cliente::pagamentoSimplificado(1); //Economizando 3 linhas em 1

        //fachadae ncapsulado todas as complexidade 
       // Cliente::comprarNaPadaria(1);
       // Cliente::SolicitarPao(12);
    }
}
