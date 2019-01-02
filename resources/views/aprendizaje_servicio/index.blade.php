@extends('layouts.app')
@section('title','Administrar A+S')
@section('content')
<div class="container">
    <div class = "row">
        <div class="col-md-12 col-md-offset-2">

            <div class = "card">
                <div class = "card-header">
                    LISTA DE APRENDIZAJE MÁS SERVICIO
                    <a href= "{{ route('aprendizajeServicio.create') }}" class = "btn btn-sm btn-primary float-right">Crear</a>
                </div>


                <div class = "card-body">
                    <table class = "table table-striped table-hover">
                        <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre de la Asignatura</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($AprendizajesServicios as $aprendizajeServicio)
                            <tr>
                                @if(Auth::user()->id == $aprendizajeServicio->user_id)
                                    <td>{{ $aprendizajeServicio->id }}</td>
                                    <td>{{ $aprendizajeServicio->nombre_asignatura }}</td>
                                    <td width="10px">
                                        <a href="{{ route('aprendizajeServicio.show', $aprendizajeServicio->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('aprendizajeServicio.edit', $aprendizajeServicio->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['aprendizajeServicio.destroy', $aprendizajeServicio->id], 'method' => 'DELETE']) !!}
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
                    {{$AprendizajesServicios->render()}}
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