<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recorrido Virtual</title>
    @include('navhomepiezas')
</head>
<style>

@media screen and (min-width: 2560px){
  
  .Titulo
  {
      font-size: 62px;
  }
  li
  {
      font-size: 29px;
  }

  body main nav 
  {
    top:20px;
  }

  .img-plant-left
  {
      width: 750px;
      height: 840px;
  }
  .img-plant2-left
  {
    width: 380px;
    height: 180px;
    left: 300px;
  }
   .container-img-plant2
    {
     left: 300px;
     bottom: 70px; 
    }
    .text-container-plant
    {
     bottom:65px;
     left: 380px;;
    }
    
}

  .Titulo
  {
    font-family: 'Great Vibes', cursive;
  }

  body main header h2
  {
    position:relative;
    left:100px;
    
    
  }

  body main nav 
  {
    background-color:#adadad;
    position: relative;
    left:350px;
  }  
  body main nav h4 p a
{
    color:#8D8273;
    text-decoration: none;
    position: relative;
}
 
 body main nav h4 p a:hover
{
     text-decoration: none;
}
.Lista-links
{
 position: relative ;
 font-size: 34px;
}
.container-img-plant2
{
 position: relative;
 right:300px;
}
.img-plant-left
{
    float: left;
    margin:0px 20px 30px 10px;
}

 div ul 
{
    font-size: 14px;
    
}
.img-plant2-left
{
    float: left;
    left: 20px;
}
.text-container-plant
{
  position: relative;
  right: 270px;
}

</style>
<body>
    <main>
        <nav>
            <h4>
                <p>
                    <a class="padding" button href="http://localhost/casaAnauco/public/">Volver al Home </a> 
                </p>
            </h4>
            <h4>
                <p>
                    <a class="padding" button href="http://localhost/casaAnauco/public/Importancia">Importancia Historica</a>
                </p>
            </h4>
        </nav>
            <header>
                <h2>
                    <p class="Titulo">Recorrido Virtual</p> 
                </h2>
            </header>
    
       
        <div class="Lista-links">
            <div class="container-img-plant"><img src= {{asset ("imagenes/plant.gif")}} class="img-plant-left" alt="Cinque Terre" width="400" height="450"></div>
            
                <ul>    
                    <li> 1) Sala de Entrada </li>
                    <li> 2) Recibo Informal </li>
                    <li> 3) Estrado</li>
                    <li> 4) Escritorio</li>
                    <li> 5) Corredor Exterior </li>
                    <li> 6) Sala Principal </li>
                    <li> 7) Oratorio </li>
                    <li> 8) Alcoba </li>
                    <li> 9) Dormitorio I </li>
                    <li> 10) Comedor</li>
                    <li> 11) Corredor /Patio Interior </li>
                    <li> 12) Dormitorio II</li>
                    <li> 13) Cuarto de Escaparates</li>
                    <li> 14) Sala Carlos III, </li>
                    <li> 15) Cocina</li>
                    <li> 16) Sala de Orfebrería</li>
                    <li> 17) Baño de la Marquesa</li>
                    <li> 18) Sala Religiosa</li>
                    <li> 19) Sala de los Murales</li>
                    <li> 20) Caballeriza</li>
                    <li> 21) Sala de Usos Múltiples</li>
                    <li> 22) Cochera (Salón Republicano)</li>
                    
                </ul>    
        </div>
        <li class="text-container-plant">segundo piso</li>
        
        <div class="container-img-plant2"> <img src= {{asset ("imagenes/plant2.gif")}} class="img-plant2-left" alt="Cinque Terre" width="180" height="78"></div>  
       
            
    </main>
    
</body>
<footer>
@include('footerpiezas')
</footer>
</html>