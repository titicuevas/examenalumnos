
{{$alumno}}

<br>
{{$alumno->notas->first()->nota}}
<br>

{{$alumno->nombre}}
<br>
@foreach ($alumno->notas as $nota)

{{$nota->ccee->ce}}-
{{$nota->ccee->descripcion}}-
{{$nota->nota}} <br>
@endforeach
