<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
<div class="col-sm-12">

<!--<h2>Carousel</h2>  -->
    
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">  
      <img src= {{asset ("imagenes/casafrente.png")}} alt="Cinque Terre" style="width:100%;"> 
      </div>

      <div class="item">
      <img src= {{asset ("imagenes/C6.png")}} alt="Cinque Terre" style="width:100%;"> 
      </div>
      <div class="item">
      <img src= {{asset ("imagenes/casa2.png")}} alt="Cinque Terre" style="width:100%;"> 
      </div>
    
      <div class="item">
      <img src= {{asset ("imagenes/casa3.png")}} alt="Cinque Terre" style="width:100%;"> 
      <div class=" carousel-caption">
      
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>








</body>
</html>
