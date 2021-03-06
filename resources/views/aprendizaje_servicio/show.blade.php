@extends('layouts.app')
@section('title','Mostrar actividad A+S')
@section('content')
<div class="container">
    <div class = "row">
        <div class="col-md-12 col-md-offset-2">

            <div class = "card">
                <div class = "card-header">
                    Ver actividad de aprendizaje mas Servicio
                    <a href="{{ route('aprendizajeServicio.edit', $aprendizajeServicio->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                </div>

                <div class = "card-body">
                    <p><strong>Nombre de la Asignatura: </strong>{{ App\Asignatura::find($aprendizajeServicio->asignatura_id)->nombre_asignatura }}</p>
                    <p><strong>Nombre de los profesores: </strong></p>
                    <ul>
                        @foreach($academico_aprendizaje_servicios as $academico_aprendizaje_servicio)
                            @if($academico_aprendizaje_servicio->aprendizaje_servicio_id == $aprendizajeServicio->id)
                                <li> {{App\Academico::find($academico_aprendizaje_servicio->academico_id)->nombre_academico}}</li>
                            @endif
                        @endforeach
                    </ul>
                    <p><strong>Cantidad Estudiantes: </strong>{{$aprendizajeServicio->cantidad_estudiantes}}</p>
                    <p><strong>Nombre Socio: </strong>{{$aprendizajeServicio->nombre_socio}}</p>
                    <p><strong>Semestre: </strong>{{$aprendizajeServicio->semestre}}</p>
                    <p><strong>Año: </strong>{{$aprendizajeServicio->año}}</p>
                    <p><strong>Convenios asociados:</strong></p>
                    <ul>
                        @foreach($actividad_aprendizaje_convenios as $actividad_aprendizaje_convenio)
                            @if($actividad_aprendizaje_convenio->aprendizaje_servicio_id == $aprendizajeServicio->id)
                                <li> {{App\Convenio::find($actividad_aprendizaje_convenio->convenio_id)->nombre_empresa}}</li>
                            @endif
                        @endforeach
                    </ul>
                    @if($aprendizajeServicio->evidencia != null)
                    <p><strong>Evidencia del Acuerdo (PDF):</strong></p>
                    <iframe src="{{$aprendizajeServicio->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                    <br>
                    @endif
                    <a href="{{ route('aprendizajeServicio.index', $aprendizajeServicio->id) }}" class="btn btn-sm btn-primary float-left">Atrás</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection