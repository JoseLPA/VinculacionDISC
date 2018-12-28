@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Editar actividad de extensión
                    </div>

                    <div class = "card-body">
                        {!! Form::model($actividadExtension,['route' => ['actividadExtension.update',$actividadExtension->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('actividadExtension.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection