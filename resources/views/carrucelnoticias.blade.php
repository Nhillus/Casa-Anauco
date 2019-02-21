<!-- CARRUCEL NOTICIAS -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<h2 class="block-title">
<span class="span:before">

Noticias
</span> 

</h2>
<!-- Indicators -->
<ol class="carousel-indicators">
    @foreach( $Noticias as $Noticia )
        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
    @endforeach
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
                    @foreach( $Noticias as $Noticia )
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                        <img src= "{{asset ( "storage/$Noticia->avatar")}}  " style="width:100%;">
                        <div class=" carousel-caption">
      <h3>
      <a href="{{ url('/Noticias/'.$Noticia->id)}}">ver detalles</a>
          <h2>{{$Noticia->titulo}}</h2>      
      </h3>
        </div>
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>