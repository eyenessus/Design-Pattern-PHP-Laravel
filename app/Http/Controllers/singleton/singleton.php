<?php
namespace App\Http\Controllers\singleton;
class Singleton {
    private static $instance = null;
    private function __construct(){

    }
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    public function pagamentoSeguro(){
        dd('e executado apenas uma instancia de pagamento');
    }
}