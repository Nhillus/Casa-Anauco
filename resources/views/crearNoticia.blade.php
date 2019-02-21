<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Noticia</title>
    @include('navhome')


</head>
<body>
@if (Auth::guest())
    <p>ERROR ACCESO NO AUTORIZADO PONGASE EN CONTACTO CON EL ADMINISTRADOR DEL SISTEMA</p>
    @elseif (Auth::user()->rols_id==1)
    <h1 style="text-align:center;">Crear Noticia</h1>



<form method="POST" action="{{ url('Noticiasz')}}"
enctype="multipart/form-data"

>
    {{csrf_field()}}
    
    <div class="container">

    <p><label for="avatar">
    <input type="file" class="form-control" name="avatar">
    </label>
    </p>


     <label for="titulo">titulo</label>
    <input type="text" class="form-control" name="titulo">
    <br>
    <label for="cuerpo">Descripcion</label>
    <textarea name="cuerpo" class="form-control" id="cuerpo" cols="30" rows="10">Contenido</textarea>

    <br>
    <br>
    <button type="submit" class="btn btn-default">Agregar Noticia</button>
    </div>

</form>
<p>
<a href="{{route('mostrarNoticias')}}">Regresar a las Noticias</a>
</p>
@else
        @endif
</body>
</html>