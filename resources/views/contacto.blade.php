<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Contacto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
     background-image: none;
     color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
  @include('navhomepiezas')
  </head>

<body>
    
<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Póngase en contacto con nosotros y le responderemos dentro de las 24 horas.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>San Bernandino
</p>
<P>Casa Anauco 1050 caracas , VE </P>
      <p><span class="glyphicon glyphicon-phone"></span> +58 0212.....</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Quintaanauco@yahoo.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
      <form method="POST" action="{{ url('contactoz')}}"
enctype="multipart/form-data"

>
    {{csrf_field()}}
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nombre" name="nombre" placeholder="nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.8582927801767!2d-66.90149418520156!3d10.511825592501397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a59338baddc21%3A0x50f0d581f5aedf96!2sMuseo+de+Arte+Colonial+de+Caracas!5e0!3m2!1ses-419!2sve!4v1548613518159" width="1775" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>
@include('footerpiezas')

</html>