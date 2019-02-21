
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<h2 class="block-title">
<span class="span:before">

Eventos
</span> 

</h2>
<!-- Indicators -->
<ol class="carousel-indicators">
    @foreach( $eventos as $evento )
        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
    @endforeach
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
                    @foreach( $eventos as $evento )
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                        <img src= "{{asset ( "storage/$evento->avatar")}}  " style="width:100%;">
                        <div class=" carousel-caption">
      <h3>
      <a href="{{ url('/Eventos/'.$evento->id)}}">ver detalles</a>
          <h2>{{$evento->nombre}}</h2>      
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
