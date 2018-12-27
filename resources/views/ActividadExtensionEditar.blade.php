<!DOCTYPE html>
<html>
<head>
    <title>"Actividad de Extension</title>
</head>

<body>

<form method="POST" action="/ActividadExtension/{{$extension->id}}">
    {{csrf_field()}}
        <h1>Editar</h1>

    <div class="form-group">
        <label for="formGroupExampleInput">Titulo Actividad</label>
        <input type="text" class="form-control" name="titulo" value="{{$extension->titulo_actividad}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nombre expositor</label>
        <input type="text" class="form-control" name="nombre" value="{{$extension->nombre_expositor}}">
    </div>
,
    <div class="form-group">
        <label for="formGroupExampleInput2">Fecha actividad</label>
        <input type="text" class="form-control" name="fecha" value="{{$extension->fecha}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Ubicacion</label>
        <input type="text" class="form-control" name="ubicacion" value="{{$extension->ubicacion}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Cantidad de asistentes</label>
        <input type="text" class="form-control" name="cantidad" value="{{$extension->cantidad_asistentes}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nombre organizador</label>
        <input type="text" class="form-control" name="organizador" value="{{$extension->organizador_actividad}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Adjuntar evidencia</label>
        <input type="file" class="form-control-file" name="evidencia">
    </div>


    <button type="submit" class="btn btn-primary">
        {{ __('Aceptar') }}

    </button>
    <button type="reset" class="btn btn-primary">
        {{ __('Limpiar') }}

    </button>
</form>

</body>
</html>