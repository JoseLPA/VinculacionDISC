@extends('layouts.app')
@section('title','Crear convenio')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Crear nuevo convenio
                    </div>

                    <div class = "card-body">
                        {!! Form::open(['route' => 'convenio.store', 'files' => true]) !!}

                            @include('convenio.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection