@extends('layouts.app')
@section('title','Mostrar titulado')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Titulado {{$titulado->nombre_titulado}}
                        <a href="{{ route('titulado.edit', $titulado->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                    </div>

                    <div class = "card-body">
                        <p><strong>Nombre del titulado: </strong>{{$titulado->nombre_titulado}}</p>
                        <p><strong>Rut: </strong>{{$titulado->rut_titulado}}</p>
                        @if($titulado->telefono != null)
                            <p><strong>Telefono: </strong>{{$titulado->telefono}}</p>
                        @endif
                        @if($titulado->correo_electronico)
                            <p><strong>Correo electronico: </strong>{{$titulado->correo_electronico}}</p>
                        @endif
                        @if($titulado->empresa != null)
                            <p><strong>Empresa en la que trabaja: </strong>{{$titulado->empresa}}</p>
                        @endif
                        <p><strong>Año de titulación: </strong>{{$titulado->anio_titulacion}}</p>
                        <p><strong>Carrera del titulado: </strong>{{$titulado->carrera_estudiante}}</p>

                        @if($titulado->evidencia != null)
                            <p><strong>Evidencia de titulación (PDF):</strong></p>
                            <iframe src="{{$titulado->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                            <br>
                        @endif
                        <a href="{{ route( 'AdmTitulado' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection