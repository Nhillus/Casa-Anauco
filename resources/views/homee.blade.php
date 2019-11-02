

<!-- @ section('content')  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    
    @include('navhomepiezas')
        
 <style>
 .block-title span:before {
    content: ":";
    font-size: 24px;
    font-weight: bold;
    font-family: Lucida;
    color: #9194b0;
    line-height: 15px;
    vertical-align: middle;
    margin-right: 6px;
    position: relative;
    top: -3px;
}

 


*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.block-title {
    color: #fff;
    font-size: 12px;
    font-weight: 400;
    text-transform: uppercase;
    background-color: #222960;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    margin: 0 0 20px -10px;
    padding: 10px 20px 8px 15px;
    display: inline-block;
    position: relative;
    z-index: 0;
}

 .carousel-inner img {
      width: 35%;
      height: 35%;
  }</style>


</head>
<body>
<div class="row">
<div class="col-sm-8">
    @include('carrucelhome')
    </div>

    <div class="col-sm-4">
         <h3>
         <a href="https://twitter.com/quintadeanauco?lang=es" target="_blank">@QuintadeAnauco<span class="fa"></span></a>
         </h3>
         <a class="twitter-timeline" data-width="600" data-height="520" href="https://twitter.com/quintadeanauco?ref_src=twsrc%5Etfw">Tets by apsconsultores</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
 </div>

<!-- partes del home -->
<div class="container-fluid text-center">
  
  <br>
  <div class="row">
  <div class="col-sm-4">
  <p>seccion reservada1 Noticias</p>
  @include('carruceleventos')


  </div>

  <div class="col-sm-4">
  <p>seccion reservada2 Eventos</p>
  @include('carrucelnoticias')

  </div>
  <!-- esta columna es para el twitter -->
    <div class="col-sm-4">
         <p>seccion reservada3 Piezas historicas</p>
     </div>

</div>

<!-- aqui termina elcontainer de servicios -->
@if (Auth::guest())
<p>holaaaaaaa  soy un simple visitante</p>
    @elseif (Auth::user()->rols_id==1)
    <!-- <p>holaaaaaaa  soy admin</p> -->
    <div class="alert alert-info">
    <ul class="nav nav-pills">
  <li><a href="#">Gestionar Usuarios</a></li>
  <li><a href="http://localhost/casaAnauco/public/mensajescontacto">Mensajes Contacto</a></li>
  <li><a href="#">Solicitudes</a></li>
  <li><a href="http://localhost/casaAnauco/public/Noticias">Noticias</a></li>
  <li><a href="#">eventos</a></li>
  <li><a href="http://localhost/casaAnauco/public/Piezas">piezas historicas</a></li>
</ul>
</div>
    

    @elseif (Auth::user()->rols_id==2)
    <p>holaaaaaaa soy registrado</p>
    {{Auth::user()->id}}
    <div class="alert alert-info">
    <ul class="nav nav-pills">
  <li><a href="#">Mi perfil</a></li>
  <li><a href="#">Mis asesorias</a></li>
</ul>
</div>


    
    
@else
    
@endif

</body>
<!-- seccion del footer -->
@include('footer')




<!-- en esta parte estoy validando los roles  -->












</html>



