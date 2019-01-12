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
    {{ Form::label('fecha_inicio', 'Fecha de inicio') }}
    {{ Form::date('fecha_inicio', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('duracion', 'Duración del convenio (Años)') }}
    {{ Form::text('duracion', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('evidencia', 'Evidencia (Formato .pdf)') }}
    {{ Form::file('evidencia') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-right']) }}
    <a href="{{ route( 'AdmConvenio' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
</div>


@section('scripts')
    <script>
        function confirmar_accion() {
            return confirm('¿Estás seguro de querer realizar esta acción?');
        }
    </script>
@endsection