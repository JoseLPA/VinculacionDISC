@extends('layouts.app')
@section('title','Crear actividad A+S')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

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