<?php
namespace App\Http\Controllers\facade\sistemas;

class subsystem{
    public function operation1(): string
    {
        return "Subsystem: Ready!\n";
    }

    // ...

    public function operationN(): string
    {
        return "Subsystem2: Go!\n";
    }
}