<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function clearUpperCaseString($string): string
    {
        return strtoupper(trim($string));
    }
}
