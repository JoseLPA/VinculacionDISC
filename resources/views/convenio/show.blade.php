@extends('layouts.app')
@section('title','Mostrar convenio')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Convenio con {{$convenio->nombre_empresa}}
                        <a href="{{ route('convenio.edit', $convenio->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                    </div>

                    <div class = "card-body">
                        <p><strong>Nombre empresa: </strong>{{$convenio->nombre_empresa}}</p>
                        <p><strong>Tipo de convenio: </strong>{{$convenio->tipo}}</p>
                        <p><strong>Fecha de inicio: </strong>{{$convenio->fecha_inicio}}</p>
                        <p><strong>Duración del convenio: </strong>{{$convenio->duracion}}</p>
                        @if($convenio->evidencia != null)
                        <p><strong>Evidencia del convenio (PDF):</strong></p>
                        <iframe src="{{$convenio->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                        <br>
                        @endif
                        <a href="{{ route( 'AdmConvenio' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection