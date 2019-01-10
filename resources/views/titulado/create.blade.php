@extends('layouts.app')
@section('title','Crear titulado')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Crear nuevo titulado
                    </div>

                    <div class = "card-body">
                        {!! Form::open(['route' => 'titulado.store', 'files' => true]) !!}

                        @include('titulado.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection