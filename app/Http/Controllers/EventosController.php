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

class EventosController extends Controller
{
    public function selecciona_Todos_Los_Eventos()
    {
        
            $Eventos=Eventos::orderBy('id', 'DESC')->paginate(2);

        
        return view('mostrarEventos', compact('Eventos'));
        
    }
    public function index()
    {     $Eventos=Eventos::all();
        return view('EventosPag', compact('Eventos'));

    }

    public function show($id)
    { $Eventos = Eventos::find($id);
    return view('EventosDetalle', compact('Eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   return view('crearEvento');
    
    }

    public function carruceleventoenelhomee()
    {   
       
      
      $even=Eventos::all();
        $eventos=$even->reverse();
        return view('carruceleventos', compact('eventos'));
    }
   

    



    
   





    public function store()
    {   
        
    
        $Eventos = request()->all();
        $requestu=request()->file('avatar')->store('public');
        $requesti=request()->file('avatar')->store('');
        $now=Carbon::now();
    
        \App\eventos::create([
            'nombre' => $Eventos['nombre'],
            'descripcion' => $Eventos['descripcion'],
            'avatar' => $requesti,
            'fecha_publicacion'  => $now,
            'invitados_especiales' => $Eventos['invitados_especiales'],
            'patrocinantes' => $Eventos['patrocinantes'],
            'fecha_evento' => $Eventos['fecha_evento'],

        ]);
    return redirect()->route('mostrarEventos');
    }

    public function edit($id) // edita los datos del evento
        {    $Evento = Eventos::find($id);
             return view('editarEvento', compact('Evento', 'id'));
        }


        
public function update(Request $request, $id)     {
    $Evento = Eventos::find($id);
    $Evento->nombre = $request->get('nombre');
    $Evento->descripcion = $request->get('descripcion');
    $Evento->invitados_especiales = $request->get('invitados_especiales');
    $Evento->patrocinantes = $request->get('patrocinantes');
    $Evento->fecha_evento = $request->get('fecha_evento');
    $Evento->save();

    return redirect()->route('mostrarEventos');
}


    public function destroy($id)
    {
        $Evento = Eventos::find($id);
        $Evento->delete();
        return redirect()->route('mostrarEventos');
    }



}
