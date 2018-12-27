@extends('VincuacionDISC/VinculacionDISC-Maikel.resources.views.layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        Editar convenio
                    </div>

                    <div class = "card-body">
                        {!! Form::model($convenio,['route' => ['convenio.update',$convenio->id], 'method' => 'PUT', 'files' => true]) !!}
                        @include('convenio.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection