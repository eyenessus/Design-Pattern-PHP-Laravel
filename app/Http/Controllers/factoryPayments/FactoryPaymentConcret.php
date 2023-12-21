<?php
namespace App\Http\Controllers\factoryPayments;
use App\Http\Controllers\factoryPayments\IPaymentFactory;
use App\Http\Controllers\factoryPayments\IPaymentProduct;
use App\Http\Controllers\factoryPayments\mercadoPago;
use App\Http\Controllers\factoryPayments\paypal;

//fabricaConcreta
class FactoryPaymentConcret implements IPaymentFactory{
    public function MercadoPago():IPaymentProduct{
        return new mercadoPago();
    }
    public function Paypal():IPaymentProduct{
        return new paypal();
    }
}