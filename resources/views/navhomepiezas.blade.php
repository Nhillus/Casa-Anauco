<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<!-- CSS -->
<link rel="Stylesheet" type="text/ccs" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximu-scale=1">

  <title>Navegacion</title>
  <!--Font awesome icons 4.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font awesome icons 5.7 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<!--   <title>{{ config('app.name', 'Laravel') }}</title>
 -->


<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
}

.padding{
    padding: 9px 3.5px;
}

.despegable
{
    padding: 9px 3.5px;
}

.header {
    background-color:#336600;
    padding: 10px;
    text-align: center;
}

body
{   font-family: 'Poppins', sans-serif;
    background-color: #adadad;
    background-size: cover;
}

nav
{
    width: 100%;
    height: 60px;
    background-color: #000000;
}

nav p 
{
 font-family: 'Great Vibes', cursive;
 color: #8D8273;
 font-size:34px;
 line-height: 55px;
 float: left;
 padding:0px 30px;
}

nav ul 
{
    float: left;
}

nav ul
{
    text-decoration: none;
   
}

nav ul li 
{
     
    float: left;
    list-style: none;
    position: relative;
}

nav ul ul
{
    list-style: none;
}
nav ul ul ul li a 
{
    
    width: 50px;
    height:45px;
    background:snow;
    text-align: center;
    line-height: 42px;
    font-size: 35px;
    margin: 8px 10px;
    display: block;
    border-radius: 50%;
    position: relative;
    overflow:hidden;
    border: 3px solid #a8a8a8;
    z-index: 1;
    
}
nav ul ul ul li a .fab
{
 position: relative;
 margin: 0px px;
 color:#000000;
 transition: .5s;
 z-index: 3;
}
nav ul ul ul li a:hover .fab 
{
    color:#fff;
    transform: rotateY(360deg);
}
nav ul ul ul li a:before
{
    content: '';
    position: absolute;
    top:100%;
    left:0;
    width: 100%;
    height: 100%;
    background: #8c5440;
    transition: .5s;
    z-index: 2;
}
nav ul ul li a:hover:before
{
    top:0;
}

nav ul ul li:nth-child(1) a:before
{
 background: #3b5999
}
nav ul ul li:nth-child(2) a:before
{
 background: #55acee
}
nav ul ul li:nth-child(3) a:before
{
 background: #e4405f
}

nav ul li a
{

 margin-left: 5px; 
 line-height: 49px;
 font-family: 'Poppins', sans-serif;
 color: #8D8273;
 font-size:14px;
 float: left;
 display: block;
 text-decoration: none;
}

nav ul li a:hover
{
    text-decoration: none;
    color :snow;
}

nav ul li ul 
{
    top: 60px;
    left: 11px;
    width: 145px;
    display: none;
    position: absolute;
    background-color: #000000;
    padding: 10px;
    border-radius: 0px 0px 10px 10px;
    z-index: 1;
}



nav ul li:hover ul 
{
    
    display: block;
}

nav ul li ul li a 
{
    padding: 10px 14px;
    font-size: 14px;
    color:#c0c0c0;
    
}

nav ul li ul li a:hover
{
    background-color: #000000;
    color:#snow;
}
{{-- 1 --}}
@media screen and (max-width: 1477px){
 body{
      
 }
 .padding
 {
   font-size:13px;  
 }
 nav ul ul ul li a 
     {
        width: 40px;
        height:35px;
        background:snow;
        text-align: center;
        line-height: 30px;
        font-size: 25px;
        margin: 15px 5px;
        display: block;
        border-radius: 50%;
        position: relative;
        overflow:hidden;
        border: 3px solid #8D8273;
        z-index: 1;
      }
}
{{-- 2 --}}
@media screen and (max-width: 1422px){
    .padding{
     font-size:12px;
     padding: 9px 2px; 
    }

    nav ul ul ul li a 
     {
        width: 30px;
        height: 25px;
        background:snow;
        text-align: center;
        line-height: 21px;
        font-size: 16px;
        margin: 20px 3px;
        display: block;
        border-radius: 50%;
        position: relative;
        overflow:hidden;
        border: 3px solid #a8a8a8;
        z-index: 1;
      }
}
{{-- 3 --}}
@media screen and (max-width: 1361px){
    .padding{
     font-size:11px;
     }
     .despegable
     {
      font-size: 12px;
     }
      
     
}
{{-- 4 --}}
@media screen and (max-width: 1343px){
    .padding{
     font-size:10px; 
    }
    nav p 
    {
        font-size:20px;
        padding: 0px 20px;
    }
}
{{-- 5 --}}
@media screen and (max-width: 1135px){
    
    .nav-link{
        margin: -2px;

    }
    nav p 
    {
        padding: 0px 0px;
    }
}











</style>
</head>
<body>

<div class="header">

</div>


<nav class="navegacion">
    <p class="Nombre-logo">Quinta De Anauco</p>
    
    
        <ul class="nav-links">
                <!-- dropdown -->
                <li class="nav-link"><a class="despegable">SOBRE EL MUSEO <span class="caret"></span></a>
                    <ul>
                            <li><a  button href="http://localhost/casaAnauco/public/historia">Historia</a></li>
                            <li><a  button href="http://localhost/casaAnauco/public/servicios">Servicios</a></li>
                            <li><a  button href="http://localhost/casaAnauco/public/coleccion">Coleccion</a></li>     
                    </ul>
                </li>
                <li class="nav-link"> <a class="padding" button href="http://localhost/casaAnauco/public/">HOME</a></li>
                <li class="nav-link"> <a class="padding" button href="http://localhost/casaAnauco/public/Noticias"> NOTICIAS </a></li>
                <li class="nav-link"> <a class="padding" button href="http://localhost/casaAnauco/public/Eventos"> EVENTOS </a></li>
                <li class="nav-link"> <a class="padding" button href="http://localhost/casaAnauco/public/Piezas">PIEZAS HISTORICAS</a></li>
                <li class="nav-link"> <a class="padding" button href="http://localhost/casaAnauco/public/Recorrido">RECORRIDO VIRTUAL </a></li>
                <li class="nav-link"> <a class="padding"button href="http://localhost/casaAnauco/public/contacto">CONTÁCTENOS</a></li>
                @if (Auth::guest())
                            <li><a class="padding" class="navbar-brand" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <li><a class="padding" class="navbar-brand" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Registrarse</a></li>
                @else
                            <li ><a class="padding" class="dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span></a></li>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout</a></li>
                                    <li><a class="padding"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form></li></a>
                                </ul>
                            
                        @endif
            <ul class="nav-social-desordenada">
                <ul>
                    <li><a href="https://www.facebook.com/pages/category/Civilization-Museum/Quinta-de-Anauco-102238113179138/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>    
                    <li><a href="https://twitter.com/quintadeanauco?lang=es"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/quintadeanauco/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </ul>
        </ul> 
</nav>
</body>
</html> 
