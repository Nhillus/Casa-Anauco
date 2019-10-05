<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecorridoController extends Controller
{
    public function index()
    {
        return view('recorridoVirtual');
    }
}
