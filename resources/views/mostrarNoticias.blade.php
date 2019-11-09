<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    @include('navhomepiezas')
    

    
    
    <title>Noticias</title>

</head>
<body>
@if (Auth::guest() || Auth::user()->rols_id==2)  
<!-- vista usuario normal -->
<h1>Noticias</h1>
        <br>  
    <ul>
    @foreach ($Noticias as $Noticia)
    <div class="row">
    <div class="col-sm-2">
    <p>este es el de 2</p>
    </div>

  <div class="col-sm-8">
         <hr>
        <article>
                 <h1>{{$Noticia->titulo}}</h1>
                          <br>
                        <a href="{{ url('/Noticias/'.$Noticia->id)}}">ver detalles</a>
                         <p>{{$Noticia->fecha}}</p>
                        {!! method_field('PUT') !!}
<img src= "{{asset ( "storage/$Noticia->avatar")}}">
 <br>
</div>
            <hr>
           </article>
           <div class="col-sm-2">
    <p>este es otro de 2</p>
    </div>
           </div>
           
        


           </div>
        @endforeach 
</ul>
    {!!$Noticias->render()!!}
<!-- vista usuario tipo admin -->
  @elseif (Auth::user()->rols_id==1)  
  <h1>Noticias</h1>
        <section>
                <a href="http://localhost/casaAnauco/public/Noticias/nuevo" class="btn btn-info" role="button">Agregar nueva Noticia</a>
        </section>
<br>  
    <ul>
      @foreach ($Noticias as $Noticia)
           <hr>
        <article>
                 <h1>{{$Noticia->titulo}}</h1>
                          <!--  {{$Noticia->cuerpo}}-->
                          <br>
                        <a href="{{ url('/Noticias/'.$Noticia->id)}}">ver detalles</a>
                        <p>{{$Noticia->fecha}}</p>
                        {!! method_field('PUT') !!}
 <img src= "{{asset ( "storage/$Noticia->avatar")}}">
 <br>
</div>
        <hr>
           </article>
         @endforeach 
</ul>
    {!!$Noticias->render()!!}
    @else
    @endif
</body>
@include('footerpiezas')

</html>