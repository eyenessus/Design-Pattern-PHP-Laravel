<?php
namespace App\Http\Controllers\factoryPayments;
use App\Http\Controllers\factoryPayments\IPaymentProduct;
class paypal implements IPaymentProduct
{
    public function pix(){
        
    }
    public function cartaoCredito(){
        
    }
    public function boleto(){
        dd('pagou no boleto usando paypal');
    }
}