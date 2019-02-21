<?php

namespace App\Http\Controllers;
use App\Noticias;
use App\Eventos;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 use Illuminate\Database\Eloquent\MassAssignmentException;

class NoticiasController extends Controller
{
    public function selecciona_Todas_Las_Noticias()
    {
        
            $Noticias=Noticias::orderBy('id', 'DESC')->paginate(2);

        
        return view('mostrarNoticias', compact('Noticias'));
        
    }
    //hice la paginacio pero no me sale la opciones de next previo
    public function index()
    {     $Noticias=Noticias::all();
       // $Noticias = DB::table('Noticias')->simplePaginate(2);

        return view('NoticiasPag', compact('Noticias'));

    }

    public function show($id)
    { $Noticias = Noticias::find($id);
    return view('NoticiasDetalle', compact('Noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   return view('crearNoticia');
    
    }

    



   
// ES ESTAAAAA!!!!
    public function carrucelnoticiaenelhomee()
    {   
       // $capacitacio=capacitaciones::all(); ESTAS VAN POR OTROS CARRUCELES POR EJEMPLO EL DE EVENTOS
        //$capacitaciones=$capacitacio->reverse();
        
        // HAY UNA CONFUCION ENTRE LA RUTA / RAIZ COMO LA DE HOME QUE YA ESTA DEFINIDA PERO LA TOMA COMO LA RAIZ.
      
      $noti=Noticias::all();
        $Noticias=$noti->reverse();
        return view('carrucelnoticias', compact('Noticias'));
    }
   
    public function carrucelnoticiayeventoenelhomee()
    {

        $Noticias=Noticias::all();
        $eventos=Eventos::all();
        return view('homee', compact('Noticias','eventos'));

    }



    public function store()
    {   
        
    
        $Noticias = request()->all();
        $requestu=request()->file('avatar')->store('public');
        $requesti=request()->file('avatar')->store('');
        $now=Carbon::now();
    
        \App\noticias::create([
            'titulo' => $Noticias['titulo'],
            'cuerpo' => $Noticias['cuerpo'],
            'avatar' => $requesti,
            'fecha'  => $now,
        
           //$Noticias->avatar =$request->file('avatar')->store(''),
         //$Noticias->save(),
        ]);
    return redirect()->route('mostrarNoticias');
    }

    public function edit($id) // edita los datos de la noticia
        {    $Noticia = Noticias::find($id);
             return view('editarNoticia', compact('Noticia', 'id'));
        }


        
public function update(Request $request, $id)     {
    $Noticia = Noticias::find($id);
    $Noticia->titulo = $request->get('titulo');
    $Noticia->cuerpo = $request->get('cuerpo');
    $Noticia->save(); 
    return redirect()->route('mostrarNoticias');
}


    public function destroy($id)
    {
        $Noticia = Noticias::find($id);
        $Noticia->delete();
        return redirect()->route('mostrarNoticias');
    }



}
