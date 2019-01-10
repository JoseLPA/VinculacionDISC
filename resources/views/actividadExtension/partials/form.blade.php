{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('titulo_actividad', 'Título de la actividad (Rquerido)') }}
    {{ Form::text('titulo_actividad', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre_expositor', 'Nombre del expositor (Requerido)') }}
    {{ Form::text('nombre_expositor', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('fecha', 'Fecha de la actividad (Opcional)') }}
    {{ Form::date('fecha', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('ubicacion', 'Ubicación de la actividad (Opcional)') }}
    {{ Form::text('ubicacion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('cantidad_asistentes', 'Cantidad de asistentes (Requerido)') }}
    {{ Form::text('cantidad_asistentes', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('academico_id', 'Marque todos los academicos que esten cargo de la actividad (Requerido)') }}
    <div>
        @foreach($academicos as $academico)
            {{Form::checkbox('academicos[]', $academico->id)}} {{ $academico->nombre_academico }}
            <br/>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('convenio_id', 'Marque los convenios asociados a la actividad de extensión (Requerido)') }}
    <div>
        @foreach($convenios as $convenio)
            {{Form::checkbox('convenios[]', $convenio->id)}} {{ $convenio->nombre_empresa }}
            <br/>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia (Requerido) (Formato .pdf, .jpg, .jpeg, .png) ') }}
    {{ Form::file('evidencia') }}
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