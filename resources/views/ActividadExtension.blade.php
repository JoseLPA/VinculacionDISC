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
            <<option value="Agregar">Agregar Opcion</option>
            <<option value="Editar">Editar Opcion</option>
            <option value="Eliminar">Selecionar Opcion</option>
        </select>
    <button type="submit" class="btn btn-primary">
        {{ __('Aceptar') }}

    </button>

</form>
</body>
</html>