<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Evento</title>
    @include('navhome')


</head>
<body>
@if (Auth::guest())
    <p>ERROR ACCESO NO AUTORIZADO PONGASE EN CONTACTO CON EL ADMINISTRADOR DEL SISTEMA</p>
    @elseif (Auth::user()->rols_id==1)
    <h1 style="text-align:center;">Crear Evento</h1>



<form method="POST" action="{{ url('Eventosz')}}"
enctype="multipart/form-data"

>
    {{csrf_field()}}
    
    <div class="container">

    <p><label for="avatar">
    <input type="file" class="form-control" name="avatar">
    </label>
    </p>


     <label for="nombre">nombre</label>
    <input type="text" class="form-control" name="nombre">
    <br>
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10">Contenido</textarea>

    <br>
    <label for="invitados_especiales">invitados_especiales</label>
    <textarea name="invitados_especiales" class="form-control" id="invitados_especiales" cols="30" rows="10">invitados_especiales</textarea>
    <br>
    <label for="patrocinantes">patrocinantes</label>
    <textarea name="patrocinantes" class="form-control" id="patrocinantes" cols="30" rows="10">patrocinantes</textarea>
    <br>
    <label for="fecha_evento">fecha_evento</label>
    <input type="datetime" class="form-control" name="fecha_evento">
    <br>

    <button type="submit" class="btn btn-default">Agregar Evento</button>
    </div>

</form>
<p>
<a href="{{route('mostrarEventos')}}">Regresar a los eventos</a>
</p>
@else
        @endif
</body>
</html>