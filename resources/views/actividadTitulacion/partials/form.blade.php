{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('titulo_actividad', 'Título de la actividad (Requerido)') }}
    {{ Form::text('titulo_actividad', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre_estudiante', 'Nombre del estudiante (Requerido)') }}
    {{ Form::text('nombre_estudiante', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('rut_estudiante', 'Rut del estudiante (Sin punto "." ni guión "-") (Requerido)') }}
    {{ Form::text('rut_estudiante', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('carrera_estudiante', 'Carrera del estudiante (Requerido)') }}
    {{ Form::text('carrera_estudiante', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('fecha_inicio', 'Fecha de inicio (Requerido)') }}
    {{ Form::date('fecha_inicio', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('fecha_termino', 'Fecha de termino (Opcional)') }}
    {{ Form::date('fecha_termino', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('academico_id1', 'Marque al profesor guia de la actividad de titulación (Requerido)') }}
    <div>
        @foreach($academicos as $academico)
        {{Form::radio('academico_id1', $academico->id)}} {{ $academico->nombre_academico }}
        </br>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('academico_id2', 'Marque al segundo profesor guia de la actividad de titulación (Opcional)') }}
    <div>
        @foreach($academicos as $academico)
        {{Form::radio('academico_id2', $academico->id)}} {{ $academico->nombre_academico }}
        </br>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('convenio_id', 'Marque los convenios asociados a la actividad de titulación') }}
    <div>
        @foreach($convenios as $convenio)
            {{Form::radio('convenio_id', $convenio->id)}} {{ $convenio->nombre_empresa }}
            </br>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia (Formato .pdf, .jpg, .jpeg, .png) ') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'actividadTitulacion.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>


@section('scripts')
    <script>
        function confirmar_accion() {
            return confirm('¿Estás seguro de querer realizar esta acción?');
        }
    </script>
@endsection