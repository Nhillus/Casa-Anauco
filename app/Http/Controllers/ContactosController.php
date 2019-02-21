<?php

namespace App\Http\Controllers;
use App\Eventos;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 use Illuminate\Database\Eloquent\MassAssignmentException;

class ContactosController extends Controller
{
    public function contactar() // muestra el detalle del usuario por id usando ruta dinamicas
    { 
    return view('contacto');
    }
	
	
	
	 public function storecontactar()
    {  
        $data = request()->all();
    
        \App\contactos::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'comentario' => $data['comentario'],
            
        ]);
        return redirect()->route('contacto');
    }
	
	
	
	 public function  mostrarmensajescontacto()

    {   //$contactos=contactos::all();
        $contactos = DB::table('contactos')->get();
        return view('mensajescontacto', compact('contactos'));
    
    }
    



}
