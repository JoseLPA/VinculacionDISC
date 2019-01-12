@extends('layouts.app')
@section('title','Crear actividad extensión')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Crear actividad de extensión
                    </div>

                    <div class = "card-body">
                        {!! Form::open(['route' => 'actividadExtension.store', 'files' => true]) !!}

                        @include('actividadExtension.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection