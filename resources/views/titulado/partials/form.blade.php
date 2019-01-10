{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('nombre_titulado', 'Nombre del titulado (Requerido)') }}
    {{ Form::text('nombre_titulado', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('rut_titulado', 'Rut del titulado (Requerido)') }}
    {{ Form::text('rut_titulado', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('telefono', 'Telefono del titulado (Opcional)') }}
    {{ Form::text('telefono', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('correo_electronico', 'Correo del titulado (Opcional)') }}
    {{ Form::text('correo_electronico', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('empresa', 'Empresa del titulado (Opcional)') }}
    {{ Form::text('empresa', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('anio_titulacion', 'Año de titulación (Requerido)') }}
    {{ Form::text('anio_titulacion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('carrera_estudiante', 'Carrera del titulado (Requerido)') }}
    {{ Form::text('carrera_estudiante', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia (Requerido)(Formato .pdf)') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'AdmTitulado' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>