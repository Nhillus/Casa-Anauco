<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bootstrap Example</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<!--   <title>{{ config('app.name', 'Laravel') }}</title>
 -->


<style>
* {
    box-sizing: border-box;
}

body {
  margin: 10;
}

.fa-twitter {
    color:#00aced;
}


/* Style the header */
.header {
    background-color:#336600;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color:#336600;
}

/* Style the topnav links */
.navbar a {
    float: left;
    display: block;
    color:#336600;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.navbar-inverse a:hover {
    background-color:#336600;
    color: green;
}
</style>
</head>
<body>

<div class="header">
<img src= {{asset ("imagenes/asociacionARTE.png")}} class="img-rounded" alt="Cinque Terre" width="500" height="100"> 
</div>


<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
            <a class="navbar-brand" href="#">QUINTA DE ANAUCO</a>
            <!-- dropdown -->
            <li class="nav-item dropdown">
            <a button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">SOBRE EL MUSEO
            <span class="caret"></span></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://localhost/casaAnauco/public/historia">Historia</a>
        <a class="dropdown-item" href="http://localhost/casaAnauco/public/servicios">Servicios</a>

        <a class="dropdown-item" href="http://localhost/casaAnauco/public/coleccion">Coleccion</a>      </div>
    </li>
            

        <a class="navbar-brand" href="http://localhost/casaAnauco/public/">HOME</a>
        <a class="navbar-brand" href="http://localhost/casaAnauco/public/Noticias">NOTICIAS</a>
      <a class="navbar-brand" href="http://localhost/casaAnauco/public/Eventos">EVENTOS</a>
      <a class="navbar-brand" href="http://localhost/casaAnauco/public/Piezas">PIEZAS HISTORICAS</a>
      <a class="navbar-brand" href="#">RECORRIDO VIRTUAL</a>
      <a class="navbar-brand" href="http://localhost/casaAnauco/public/contacto">CONTÁCTENOS</a>
      

@if (Auth::guest())
                            <a class="navbar-brand" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a>

                            <a class="navbar-brand" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Registrarse</a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif 

            <a  href="https://www.facebook.com/consultoresaps/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/quintadeanauco?lang=es">
        <span class="fa-stack fa-lg icon-twitter">
          <i class="fa fa-square fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x"></i>
        </span>
    </a>
      </ul>
      

      

     

    



</nav>




</body>
</html>
