@include('navhome')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">noticia</div>

                <div class="panel-body">
                <!-- puede ser que alomejor aqui la solucion sea poner la ruta post de usuarios  -->
                <form method="post" action="{{action('NoticiasController@update', $id)}}">
                {{ method_field('PUT') }}



                <!--                 <input type="hidden" name="_token" value="csrf_token()">
 -->

                        {{ csrf_field() }}

                        <!-- titulo -->
                        <div class="form-group">
                            <label for="titulo" class="col-md-4 control-label">titulo</label>

                            <div class="col-md-6">
                                <input id="titulo" type="titulo" class="form-control" name="titulo" value="{{ old('titulo' , $Noticia->titulo) }} ">
                            </div>
                        </div>
                        <!-- cuerpo -->
                        <div class="form-group">
                            <label for="cuerpo" class="col-md-4 control-label">cuerpo</label>

                            <div class="col-md-6">
                                <textarea class="form-control" cols="30" rows="10" name="cuerpo" maxlength="750" required autofocus>{{ ucfirst($Noticia->cuerpo) }}</textarea>
                            </div>

                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








                        