@extends('layouts.app')
@section('title','Mostrar actividad titulación')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Ver actividad de titulación
                        <a href="{{ route('actividadTitulacion.edit', $actividadTitulacion->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                    </div>

                    <div class = "card-body">
                        <p><strong>Titulo de la actividad: </strong>{{$actividadTitulacion->titulo_actividad}}</p>
                        <p><strong>nombre del estudiante: </strong>{{$actividadTitulacion->nombre_estudiante}}</p>
                        <p><strong>rut del estudiante: </strong>{{$actividadTitulacion->rut_estudiante}}</p>
                        <p><strong>carrera del estudiante: </strong>{{$actividadTitulacion->carrera_estudiante}}</p>
                        <p><strong>Fecha de inicio de la actividad: </strong>{{$actividadTitulacion->fecha_inicio}}</p>
                        @if($actividadTitulacion->fecha_termino == null)
                            <p><strong>Fecha de termino de la actividad: </strong>La actividad no posee una fecha de termino</p>
                        @else
                            <p><strong>Fecha de termino de la actividad: </strong>{{$actividadTitulacion->fecha_termino}}</p>
                        @endif
                        @if($actividadTitulacion->academico_id2 == null)
                            <p><strong>Profesor guia: </strong>{{App\Academico::find($actividadTitulacion->academico_id1)->nombre_academico}}</p>
                        @else
                            <p><strong>Profesores guia: </strong>{{App\Academico::find($actividadTitulacion->academico_id1)->nombre_academico}} y {{App\Academico::find($actividadTitulacion->academico_id2)->nombre_academico}}</p>
                        @endif
                        <p><strong>Nombre de la empresa: </strong>{{App\Convenio::find($actividadTitulacion->convenio_id)->nombre_empresa}}</p>
                        <p><strong>Evidencia de la actividad:</strong></p>
                        <iframe src="{{$actividadTitulacion->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                        <a href="{{ route( 'actividadTitulacion.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection