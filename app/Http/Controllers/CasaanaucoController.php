<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 use Illuminate\Database\Eloquent\MassAssignmentException;
 use App\Noticias;


class CasaanaucoController extends Controller
{
    public function mostrarhistoria()
    {   return view('historia');
    
    }

    public function mostrarservicios()
    {    $Noticias=Noticias::all();
         return view('servicios', compact('Noticias'));
    
    }

    public function mostrarcoleccion()
    {   return view('coleccion');
    
    }



}
