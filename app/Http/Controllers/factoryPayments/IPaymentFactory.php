<?php
namespace App\Http\Controllers\factoryPayments;
use App\Http\Controllers\factoryPayments\IPaymentProduct;
//Fabrica
interface IPaymentFactory {
    public function MercadoPago():IPaymentProduct;
    public function Paypal():IPaymentProduct;
}