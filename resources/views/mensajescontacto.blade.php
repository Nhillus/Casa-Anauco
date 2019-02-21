<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensajes de contacto</title>
    @include('navhome')

</head>
<body>
    <!-- vista usuario tipo admin -->
  @if (Auth::user()->rols_id==1)  
  <h1>mensajes</h1>
       
<br>  
    <ul>
      @foreach ($contactos as $contacto)
           <hr>
        <article>
                 <h1>{{$contacto->nombre}}</h1>
                          <br>
                        <p>{{$contacto->email}}</p>
                        <br>
                        <p>{{$contacto->comentario}}</p>
                        {!! method_field('PUT') !!}
 <br>
</div>
        <hr>
           </article>
         @endforeach 
</ul>
    
    @endif
</body>
@include('footer')
</body>
</html>