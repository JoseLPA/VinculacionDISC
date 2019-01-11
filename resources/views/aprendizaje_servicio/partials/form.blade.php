{{ Form::hidden('user_id', auth()->user()->id) }}


<div class ="form-group">
    {{Form::label('asignatura_id','Eliga la asignatura asociada a la actividad')}}
    <div class="form-group">
        {{ Form::select('asignatura_id', $asignaturas->pluck('nombre_asignatura', 'id')) }}
    </div>
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
    {{ Form::label('convenio_id', 'Marque todos los convenios asociados a la actividad A+S (Opcional)') }}
    <div>
        @foreach($convenios as $convenio)
            {{Form::checkbox('convenios[]', $convenio->id)}} {{ $convenio->nombre_empresa }}
            <br/>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('cantidad_estudiantes', 'Cantidad de estudiantes que participan en la actividad (Requerido)') }}
    {{ Form::text('cantidad_estudiantes', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre_socio', 'Nombre del socio comunitario (Requerido)') }}
    {{ Form::text('nombre_socio', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('semestre', 'Semestre en el que se dicta la asignatura (Requerido)') }}
    {{ Form::text('semestre', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('año', 'Año en que se dicta la asignatura (Requerido)') }}
    {{ Form::text('año', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia de la actividad (Formato .pdf, .jpg, .jpeg, .png)(Requerido)') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'aprendizajeServicio.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>