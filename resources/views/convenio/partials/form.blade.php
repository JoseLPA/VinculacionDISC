{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('nombre_empresa', 'Nombre de la empresa') }}
    {{ Form::text('nombre_empresa', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('tipo', 'Tipo de convenio') }}
    </br>
    <label>
        {{ Form::radio('tipo', 'Capstone') }} Capstone
    </label>
    <label>
        {{ Form::radio('tipo', 'Marco') }} Marco
    </label>
    <label>
        {{ Form::radio('tipo', 'Específico') }} Específico
    </label>
    <label>
        {{ Form::radio('tipo', 'A+S') }} A+S
    </label>
</div>

<div class="form-group">
    {{ Form::label('actividad_extencion_id', 'Marque las actividades de extensión asociadas al convenio') }}
    <div>
        @foreach($actividadesExtension as $actividadExtension)
            {{Form::checkbox('actividadesExtension[]', $actividadExtension->id)}} {{ $actividadExtension->titulo_actividad }}
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('aprendizaje_servicios_id', 'Marque las actividades de A+S asociadas al convenio') }}
    <div>
        @foreach($aprendizajeServicios as $aprendizajeServicio)
            {{Form::checkbox('aprendizajeServicios[]', $aprendizajeServicio->id)}} {{ $aprendizajeServicio->nombre_asignatura }}
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('fecha_inicio', 'Fecha de inicio') }}
    {{ Form::date('fecha_inicio', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('duracion', 'Duracion del convenio') }}
    {{ Form::text('duracion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'convenio.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>