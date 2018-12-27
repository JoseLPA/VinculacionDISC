<div class="container">
<div class = "row">
    <div class="col-md-8 col-md-offset-2">

        <div class = "card">
            <div class = "card-header">
                Ver Aprendizaje mas Servicio
                <a href="{{ route('aprendizajeServicio.edit', $aprendizajeServicio->id) }}" class="btn btn-sm btn-primary float-right">Editar</a>
            </div>

            <div class = "card-body">
                <p><strong>Nombre Asignatura: </strong>{{$aprendizajeServicio->nombre_asignatura}}</p>
                <p><strong>Nombre Profesor: </strong>{{$aprendizajeServicio->nombre_profesor}}</p>
                <p><strong>Cantidad Estudiantes: </strong>{{$aprendizajeServicio->cantidad_estudiantes}}</p>
                <p><strong>Nombre Socio: </strong>{{$aprendizajeServicio->nombre_socio}}</p>
                <p><strong>Semestre: </strong>{{$aprendizajeServicio->semestre}}</p>
                <p><strong>Año: </strong>{{$aprendizajeServicio->año}}</p>
                <p><strong>Evidencia del Acuerdo (PDF):</strong></p>
                <iframe src="{{$aprendizajeServicio->evidencia}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                <br>
                <a href="{{ route('aprendizajeServicio.index', $aprendizajeServicio->id) }}" class="btn btn-sm btn-primary float-left">Atrás</a>
            </div>
        </div>
    </div>
</div>
</div>