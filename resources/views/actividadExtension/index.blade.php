@extends('layouts.app')
@section('title','Administrar actividad extensión')
@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-12 col-md-offset-2">

                <div class = "card">
                    <div class = "card-header">
                        LISTA DE ACTIVIDADES DE EXTENSIÓN
                        <a href= "{{ route('actividadExtension.create') }}" class = "btn btn-sm btn-primary float-right">Crear</a>
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
                            @foreach($actividadesExtension as $actividadExtension)
                                <tr>
                                    @if(Auth::user()->id == $actividadExtension->user_id)
                                        <td>{{ $actividadExtension->id }}</td>
                                        <td>{{ $actividadExtension->titulo_actividad }}</td>
                                        <td width="10px">
                                            <a href="{{ route('actividadExtension.show', $actividadExtension->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('actividadExtension.edit', $actividadExtension->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['actividadExtension.destroy', $actividadExtension->id], 'method' => 'DELETE']) !!}
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
                        {{$actividadesExtension->render()}}
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