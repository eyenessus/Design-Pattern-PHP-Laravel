<?php

use App\Http\Controllers\GatewayPagamento;
use App\Http\Controllers\IMercadoPago;
use App\Http\Controllers\IPagSeguro;
use App\Http\Controllers\IPaypal;

class MercadoPago implements IMercadoPago
{
    public function pagarCartao()
    {
        echo 'pagando usando cartao do mercado pago';
    }
}

class PagSeguro implements IPagSeguro
{
    public function pagarPix()
    {
        echo "Pagamento processado pelo PagSeguro.";
    }
}

class Paypal implements IPaypal
{
    public function transferir()
    {
        echo "Pagamento realizado com PayPal.";
    }
}

class PaypalAdapter implements GatewayPagamento{
    private $paypal;
    public function __construct(IPaypal $iPaypal)
    {
        $this->paypal = $iPaypal;
    }
    public function processarPagamento(){
        $this->paypal->transferir();
    }
}


$paypal = new PaypalAdapter(new Paypal);
$paypal->processarPagamento();

