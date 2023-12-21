<?php
namespace App\Http\Controllers\factoryPayments;
//Produto
interface IPaymentProduct {
    public function pix();
    public function cartaoCredito();
    public function boleto();
}