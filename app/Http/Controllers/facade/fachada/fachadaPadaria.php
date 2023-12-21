<?php

use App\Http\Controllers\facade\fachada\fachadaDeCompras;

class fachadaPadaria{
    protected $compraPao;
    public function __construct()
    {
        $this->compraPao = new fachadaDeCompras();
    }
    public function pedirPao($val){
        $this->compraPao->realizarCompra($val);
    }
}