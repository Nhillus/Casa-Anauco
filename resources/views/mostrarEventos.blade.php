<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos</title>
    @include('navhomepiezas')
    

    
    
    <title>Eventos</title>

</head>
<body>
@if (Auth::guest() || Auth::user()->rols_id==2)  
<!-- vista usuario normal -->
<h1>Eventos</h1>
        <br>  
    <ul>
    @foreach ($Eventos as $Evento)
         <hr>
        <article>
                 <h1>{{$Evento->nombre}}</h1>
                          <br>
                        <a href="{{ url('/Eventos/'.$Evento->id)}}">ver detalles</a>
                         <p>{{$Evento->descripcion}}</p>
                         <p>{{$Evento->fecha_publicacion}}</p>
                         <p>{{$Evento->invitados_especiales}}</p>
                         <p>{{$Evento->patrocinantes}}</p>
                         <p>{{$Evento->fecha_evento}}</p>


                        {!! method_field('PUT') !!}
<img src= "{{asset ( "storage/$Evento->avatar")}}">
 <br>
</div>
            <hr>
           </article>
        @endforeach 
</ul>
    {!!$Eventos->render()!!}
<!-- vista usuario tipo admin -->
  @elseif (Auth::user()->rols_id==1)  
  <h1>Eventos</h1>
        <section>
                <a href="http://localhost/casaAnauco/public/Eventos/nuevo" class="btn btn-info" role="button">Agregar nuevo evento</a>
        </section>
<br>  
    <ul>
    @foreach ($Eventos as $Evento)
         <hr>
        <article>
                 <h1>{{$Evento->nombre}}</h1>
                          <br>
                        <a href="{{ url('/Eventos/'.$Evento->id)}}">ver detalles</a>
                         <p>{{$Evento->descripcion}}</p>
                         <p>{{$Evento->fecha_publicacion}}</p>
                         <p>{{$Evento->invitados_especiales}}</p>
                         <p>{{$Evento->patrocinantes}}</p>
                         <p>{{$Evento->fecha_evento}}</p>


                        {!! method_field('PUT') !!}
<img src= "{{asset ( "storage/$Evento->avatar")}}">
 <br>
</div>
            <hr>
           </article>
        @endforeach 
</ul>
    {!!$Eventos->render()!!}
    @else
    @endif
</body>
@include('footerpiezas')

</html>