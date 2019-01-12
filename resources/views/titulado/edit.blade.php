@extends('layouts.app')
@section('title','Editar titulado')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Editar {{$titulado->nombre_titulado}}
                    </div>

                    <div class = "card-body">
                        {!! Form::model($titulado,['route' => ['titulado.update',$titulado->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('titulado.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection