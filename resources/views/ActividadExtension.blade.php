<!DOCTYPE html>
<html>
<head>
    <title>"Actividad de Extension</title>
</head>

<body>

<form method="POST" action="/ActividadExtension">
    {{csrf_field()}}

    <h1>Que accion desea realizar</h1>
    opcion:
    <select name="opcion">
        <option value="Seleccionar">Selecionar Opcion</option>
        <<option value="Mostrar">Mostrar actividad de extension</option>
        <<option value="Agregar">Agregar actividad de extension</option>
        <<option value="Editar">Editar actividad de extension</option>
        <option value="Eliminar">Eliminar actividad de extension</option>
    </select>
    <button type="submit" class="btn btn-primary">
        {{ __('Aceptar') }}

    </button>

</form>
</body>
</html>