<?php
namespace App\Http\Controllers\factoryPayments;
use App\Http\Controllers\factoryPayments\IPaymentProduct;
//produto concreto
class mercadoPago implements IPaymentProduct{
    public function pix(){
        dd('pix mercado pago');
    }
    public function cartaoCredito(){
        dd('realizando pagamento com o mercado pago usando cartaoCredito');
    }
    public function boleto(){
        dd('boleto usando mercado pago');
    }
}