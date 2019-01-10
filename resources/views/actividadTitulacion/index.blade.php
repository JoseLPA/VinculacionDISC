@extends('layouts.app')
@section('title','Administrar actividad titulacion')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        LISTA DE ACTIVIDADES DE TITULACION
                        <a href= "{{ route('actividadTitulacion.create') }}" class = "btn btn-sm btn-primary float-right">Crear</a>
                    </div>


                    <div class = "card-body">
                        <table class = "table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Titulo de la actividad</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($actividadesTitulacion as $actividadTitulacion)
                                <tr>
                                    @if(Auth::user()->id == $actividadTitulacion->user_id)
                                        <td>{{ $actividadTitulacion->id }}</td>
                                        <td>{{ $actividadTitulacion->titulo_actividad }}</td>
                                        <td width="10px">
                                            <a href="{{ route('actividadTitulacion.show', $actividadTitulacion->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('actividadTitulacion.edit', $actividadTitulacion->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['actividadTitulacion.destroy', $actividadTitulacion->id], 'method' => 'DELETE']) !!}
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
                        {{$actividadesTitulacion->render()}}
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