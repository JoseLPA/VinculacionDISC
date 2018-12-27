<!DOCTYPE html>
<html>
<head>
    <title>"Actividad de Extension</title>
</head>

<body>

<form method="POST" action="/ActividadExtension/agregar" enctype = "multipart/form-data">
    {{csrf_field()}}

    <h1>Agregar</h1>

    <div class="form-group">
        <label for="formGroupExampleInput">Titulo Actividad</label>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese titulo">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nombre expositor</label>
        <input type="text" class="form-control" name="nombre_expositor" placeholder="Ingrese nombre expositor">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Fecha actividad</label>
        <input type="text" class="form-control" name="fecha" placeholder="yyyy-mm-dd">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Ubicacion</label>
        <input type="text" class="form-control" name="ubicacion" placeholder="Ingrese ubicacion">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Cantidad de asistentes</label>
        <input type="text" class="form-control" name="cantidad" placeholder="Ingrese cantidad">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nombre organizador</label>
        <input type="text" class="form-control" name="nombre_organizador" placeholder="Ingrese nombre organizador">
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