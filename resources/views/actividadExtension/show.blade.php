@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Ver actividad de extensión
                        <a href="{{ route('actividadExtension.edit', $actividadExtension->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                    </div>

                    <div class = "card-body">
                        <p><strong>Titulo de la actividad: </strong>{{$actividadExtension->titulo_actividad}}</p>
                        <p><strong>nombre del expositor: </strong>{{$actividadExtension->nombre_expositor}}</p>
                        <p><strong>Fecha: </strong>{{$actividadExtension->fecha}}</p>
                        <p><strong>Ubicación: </strong>{{$actividadExtension->ubicacion}}</p>
                        <p><strong>Cantidad de asistentes: </strong>{{$actividadExtension->cantidad_asistentes}}</p>
                        <p><strong>Organizador: </strong>{{$actividadExtension->organizador_actividad}}</p>
                        <p><strong>Convenios asociados:</strong></p>
                        <ul>
                            @foreach($actividad_extension_convenios as $actividad_extension_convenio)
                                @if($actividad_extension_convenio->actividad_extension_id == $actividadExtension->id)
                                    <li> {{App\Convenio::find($actividad_extension_convenio->convenio_id)->nombre_empresa}}</li>
                                @endif
                            @endforeach
                        </ul>
                        <p><strong>Evidencia de la actividad:</strong></p>
                        <iframe src="{{$actividadExtension->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                        <br>
                        <a href="{{ route( 'actividadExtension.index' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection