@extends('layouts.app')
@section('title','Administrar titulados')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        LISTA DE TITULADOS
                        <a href= "{{ route('titulado.create') }}" class = "btn btn-sm btn-primary float-right">Crear</a>
                    </div>


                    <div class = "card-body">
                        <table class = "table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre del titulado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($titulados as $titulado)
                                <tr>
                                    @if(Auth::user()->id == $titulado->user_id)
                                        <td>{{ $titulado->id }}</td>
                                        <td>{{ $titulado->nombre_titulado }}</td>
                                        <td width="10px">
                                            <a href="{{ route('titulado.show', $titulado->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('titulado.edit', $titulado->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['titulado.destroy', $titulado->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger" onclick="return confirmar_accion();">
                                                Eliminar
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$titulados->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function confirmar_accion() {
            return confirm('¿Estás seguro de querer realizar esta acción?');
        }
    </script>
@endsection