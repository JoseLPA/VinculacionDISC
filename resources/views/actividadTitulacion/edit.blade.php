@extends('layouts.app')
@section('title','Editar actividad titulación')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Editar actividad de titulación
                    </div>

                    <div class = "card-body">
                        {!! Form::model($actividadTitulacion,['route' => ['actividadTitulacion.update',$actividadTitulacion->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('actividadTitulacion.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection