{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('nombre_titulado', 'Nombre del titulado') }}
    {{ Form::text('nombre_titulado', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('rut_titulado', 'Rut del titulado') }}
    {{ Form::text('rut_titulado', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('telefono', 'Telefono del titulado') }}
    {{ Form::text('telefono', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('correo_electronico', 'Correo del titulado') }}
    {{ Form::text('correo_electronico', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('empresa', 'Empresa del titulado') }}
    {{ Form::text('empresa', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('anio_titulacion', 'Año de titulación') }}
    {{ Form::text('anio_titulacion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('carrera_estudiante', 'Carrera del titulado') }}
    {{ Form::text('carrera_estudiante', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia (Formato .pdf)') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'AdmConvenio' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>