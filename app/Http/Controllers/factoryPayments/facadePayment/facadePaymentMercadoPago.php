<?php
namespace App\Http\Controllers\factoryPayments\facadePayment;
use App\Http\Controllers\factoryPayments\FactoryPaymentConcret;
class facadePaymentMercadoPago{
    private $subsystem;

    public function __construct(){
        $this->subsystem = new FactoryPaymentConcret();
    }

    public function MercadoPagoCartão(){
       return $this->subsystem->MercadoPago()->cartaoCredito();
    }
}