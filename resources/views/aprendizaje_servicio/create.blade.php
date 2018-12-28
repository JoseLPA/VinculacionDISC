@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Crear actividad A+S
                    </div>

                    <div class = "card-body">
                        {!! Form::open(['route' => 'aprendizajeServicio.store', 'files' => true]) !!}

                        @include('aprendizaje_servicio.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection