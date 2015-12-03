<p>Vista Ubicacion</p>
<br>
 
 @for ($i = 0; $i< count($vars_localizacion); $i++) 
     @for ($y = 0; $y < count($vars_localizacion[$i]); $y++) 
        {{$vars_localizacion[$i][$y]}}
       <br>
    @endfor
@endfor
<hr>
  @foreach ($vars_localizacion as $var_localizacion) 
             {{$var_localizacion[0]}}
              <br>
             {{$var_localizacion[1]}}
              <br>
             {{$var_localizacion[2]}}
              <br>
      @endforeach
      <br>
     
        