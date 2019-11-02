
@include('navhomepiezas')
@if (Auth::guest())
<p>titulo: {{$Noticias->titulo}}</p>
<p>cuerpo: {{$Noticias->cuerpo}}</p>
<p>{{$Noticias->fecha}}</p>

<img src= "{{asset ( "storage/$Noticias->avatar")}}">


@elseif (Auth::user()->rols_id==1)
<p>titulo: {{$Noticias->titulo}}</p>
<p>cuerpo: {{$Noticias->cuerpo}}</p>
<p>{{$Noticias->fecha}}</p>
<img src= "{{asset ( "storage/$Noticias->avatar")}}">
<tr>
<br>
<td><a href="{{action('NoticiasController@edit', $Noticias['id'])}}" class="btn btn-warning">Editar Noticia</a></td>


<td>
          <form action="{{action('NoticiasController@destroy', $Noticias['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar Noticia</button>
          </form>
        </td>
        </tr>
        @else
        @endif
        


