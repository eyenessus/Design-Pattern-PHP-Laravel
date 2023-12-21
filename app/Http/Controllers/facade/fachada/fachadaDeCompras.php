<?php
namespace App\Http\Controllers\facade\fachada;
use App\Http\Controllers\facade\sistemas\subsystem;
use App\Http\Controllers\facade\sistemas\subsystem1;
use App\Http\Controllers\facade\sistemas\subsystem2;
use App\Http\Controllers\facade\sistemas\subsystem3;

class fachadaDeCompras{
    protected $sistema;
    protected $sistema1;
    protected $sistema2;
    protected $sistema3;
    public function __construct(){
        $this->sistema = new subsystem();
        $this->sistema1 = new subsystem1();
        $this->sistema2 = new subsystem2();
        $this->sistema3 = new subsystem3();
    }
    public function realizarCompra($valor){
        $this->sistema3->operationN($valor);
        return true;
    }
}