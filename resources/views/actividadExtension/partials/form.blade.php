{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('titulo_actividad', 'Título de la actividad') }}
    {{ Form::text('titulo_actividad', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre_expositor', 'Nombre del expositor') }}
    {{ Form::text('nombre_expositor', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('fecha', 'Fecha de la actividad') }}
    {{ Form::date('fecha', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('ubicacion', 'Ubicación de la actividad') }}
    {{ Form::text('ubicacion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('cantidad_asistentes', 'Cantidad de asistentes') }}
    {{ Form::text('cantidad_asistentes', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('organizador_actividad', 'Organizador de la actividad') }}
    {{ Form::text('organizador_actividad', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::label('convenio_id', 'Marque los convenios asociados a la actividad de extensión') }}
    <div>
        @foreach($convenios as $convenio)
            {{Form::checkbox('convenios[]', $convenio->id)}} {{ $convenio->nombre_empresa }}
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'actividadExtension.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>


@section('scripts')
    <script>
        function confirmar_accion() {
            return confirm('¿Estás seguro de querer realizar esta acción?');
        }
    </script>
@endsection