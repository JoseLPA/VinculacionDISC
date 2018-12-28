{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('nombre_asignatura', 'Nombre de la asignatura') }}
    {{ Form::text('nombre_asignatura', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre_profesor', 'Nombre del profesor') }}
    {{ Form::text('nombre_profesor', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('cantidad_estudiantes', 'Cantidad de estudiantes') }}
    {{ Form::text('cantidad_estudiantes', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre_socio', 'Nombre del socio') }}
    {{ Form::text('nombre_socio', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('semestre', 'Semestre') }}
    {{ Form::text('semestre', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('año', 'Año') }}
    {{ Form::text('año', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::label('convenio_id', 'Marque los convenios asociados a la actividad A+S') }}
    <div>
        @foreach($convenios as $convenio)
            {{Form::checkbox('convenios[]', $convenio->id)}} {{ $convenio->nombre_empresa }}
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'aprendizajeServicio.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>


@section('scripts')
    <script>
        function confirmar_accion() {
            return confirm('¿Estás seguro de querer realizar esta acción?');
        }
    </script>
@endsection