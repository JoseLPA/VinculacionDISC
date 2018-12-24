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
                        <div>
                            <img src="{{ $convenio->evidencia }}" class="img-responsive">
                        </div>
                        <br>
                        <a href="{{ route( 'AdmConvenio' )}}" class="btn btn-sm btn-primary float-left">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection