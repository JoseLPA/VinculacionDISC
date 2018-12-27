@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        LISTA DE CONVENIOS
                        <a href= "{{ route('convenio.create') }}" class = "btn btn-sm btn-primary float-right">Crear</a>
                    </div>


                    <div class = "card-body">
                        <table class = "table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre de la empresa</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach($convenios as $convenio)
                                        <tr>
                                            @if(Auth::user()->id == $convenio->user_id)
                                                <td>{{ $convenio->id }}</td>
                                                <td>{{ $convenio->nombre_empresa }}</td>
                                                <td width="10px">
                                                    <a href="{{ route('convenio.show', $convenio->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                                </td>
                                                <td width="10px">
                                                    <a href="{{ route('convenio.edit', $convenio->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                                </td>
                                                <td width="10px">
                                                    {!! Form::open(['route' => ['convenio.destroy', $convenio->id], 'method' => 'DELETE']) !!}
                                                        <button class="btn btn-sm btn-danger">
                                                            Eliminar
                                                        </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>
                        {{$convenios->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection