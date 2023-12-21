<?php
namespace App\Http\Controllers;
interface IMercadoPago{
    public function pagarCartao();
}
interface IPagSeguro{
    public function pagarPix();
}
interface IPaypal{
    public function transferir();
}

interface GatewayPagamento{
    public function processarPagamento();
}