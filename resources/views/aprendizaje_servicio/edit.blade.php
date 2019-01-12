@extends('layouts.app')
@section('title','Editar actividad A+S')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Editar actividad de A+S
                    </div>

                    <div class = "card-body">
                        {!! Form::model($aprendizajeServicio,['route' => ['aprendizajeServicio.update',$aprendizajeServicio->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('aprendizaje_servicio.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection