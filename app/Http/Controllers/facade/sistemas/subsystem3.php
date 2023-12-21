<?php
namespace App\Http\Controllers\facade\sistemas;

class subsystem3{
    public function operation1(): string
    {
        return "Subsystem3: Ready!\n";
    }

    // ...

    public function operationN($valor): string
    {
        return "Subsystem3: Go!\n";
    }
}