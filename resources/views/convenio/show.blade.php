@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Ver convenio
                        <a href="{{ route('convenio.edit', $convenio->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                    </div>

                    <div class = "card-body">
                        <p><strong>Nombre empresa: </strong>{{$convenio->nombre_empresa}}</p>
                        <p><strong>Tipo de convenio: </strong>{{$convenio->tipo}}</p>
                        <p><strong>Fecha de inicio: </strong>{{$convenio->fecha_inicio}}</p>
                        <p><strong>Duración del convenio: </strong>{{$convenio->duracion}}</p>
                        <p><strong>Actividades de extensión asociadas:</strong></p>

                        <ul>
                        @foreach($actividad_extension_convenios as $actividad_extension_convenio)
                            @if($actividad_extension_convenio->convenio_id == $convenio->id)
                                    <li> {{App\ActividadExtension::find($actividad_extension_convenio->actividad_extension_id)->titulo_actividad}}</li>
                            @endif
                        @endforeach
                        </ul>

                        <p><strong>Asignaturas A+S asociadas:</strong></p>
                        <ul>
                            @foreach($aprendizaje_servicio_convenios as $aprendizaje_servicio_convenio)
                                @if($aprendizaje_servicio_convenio->convenio_id == $convenio->id)
                                    <li> {{App\AprendizajeServicio::find($aprendizaje_servicio_convenio->aprendizaje_servicio_id)->nombre_asignatura}}</li>
                                @endif
                            @endforeach
                        </ul>
                        <iframe src="{{$convenio->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                        <br>
                        <a href="{{ route( 'AdmConvenio' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection