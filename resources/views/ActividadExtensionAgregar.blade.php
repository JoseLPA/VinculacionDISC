<!DOCTYPE html>
<html>
<head>
    <title>"Actividad de Extension</title>
</head>

<body>

<form method="POST" action="/ActividadExtension/agregar">
    {{csrf_field()}}

    <h1>Agregar</h1>

        <div class="form-group">
            <label for="formGroupExampleInput">Titulo Actividad</label>
            <input type="text" class="form-control" id="titulo" placeholder="Ingrese titulo">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nombre expositor</label>
            <input type="text" class="form-control" id="nombre_expositor" placeholder="Ingrese nombre expositor">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Ubicacion</label>
            <input type="text" class="form-control" id="ubicacion" placeholder="Ingrese ubicacion">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Cantidad de asistentes</label>
            <input type="text" class="form-control" id="cantidad" placeholder="Ingrese cantidad">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nombre organizador</label>
            <input type="text" class="form-control" id="nombre_organizador" placeholder="Ingrese nombre organizador">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Evidencia</label>
            <input type="text" class="form-control" id="evidencia" placeholder="Ingrese evidencia">
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

