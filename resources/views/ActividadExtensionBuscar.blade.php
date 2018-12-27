<!DOCTYPE html>
<html>
<head>
    <title>"Actividad de Extension Buscar</title>
</head>

<body>
    @if ($opcion == 'Mostrar')
    <form method="POST" action="/ActividadExtension/buscar">
        {{csrf_field()}}
        <h1>Buscar Actividad</h1>
    <div class="form-group">
        <label for="formGroupExampleInput">Ingrese id de la actividad</label>
        <input type="text" class="form-control" name="id" placeholder="Ingrese id">
    </div>
    <button type="submit" class="btn btn-primary">
        {{ __('Aceptar') }}

    </button>
</form>
    @endif
    @if ($opcion == 'Editar')
        <form method="PUT" action="/ActividadExtension/editar">
            {{csrf_field()}}
            <h1>Buscar Actividad</h1>
            <div class="form-group">
                <label for="formGroupExampleInput">Ingrese id de la actividad</label>
                <input type="text" class="form-control" name="id" placeholder="Ingrese id">
            </div>
            <button type="submit" class="btn btn-primary">
                {{ __('Aceptar') }}

            </button>
        </form>
    @endif
    @if ($opcion == 'Eliminar')
        <form method="POST" action="/ActividadExtension/eliminar">
            {{csrf_field()}}
            <h1>Buscar Actividad</h1>
            <div class="form-group">
                <label for="formGroupExampleInput">Ingrese id de la actividad</label>
                <input type="text" class="form-control" name="id" placeholder="Ingrese id">
            </div>
            <button type="submit" class="btn btn-primary">
                {{ __('Aceptar') }}

            </button>
        </form>
    @endif
</body>
</html>
