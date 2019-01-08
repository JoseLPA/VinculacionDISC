@extends('layouts.app')
@section('title','Crear actividad titulación')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Crear actividad de titulacion
                    </div>

                    <div class = "card-body">
                        {!! Form::open(['route' => 'actividadTitulacion.store', 'files' => true]) !!}

                        @include('actividadTitulacion.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection