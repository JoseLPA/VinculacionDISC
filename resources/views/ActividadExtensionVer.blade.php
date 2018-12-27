<!DOCTYPE html>
<html>
<head>
    <title>"Actividad de Extension Ver</title>
</head>

<body>

<h1>Ver actividad</h1>



<h2>La actividad de extension es:</h2>
<p>Titulo: {{$extension->titulo_actividad}}</p>
<p>Nombre del expositor: {{$extension->nombre_expositor}}</p>
<p>Fecha: {{$extension->fecha}}</p>
<p>Ubicacion: {{$extension->ubicacion}}</p>
<p>Cantidad de asistentes: {{$extension->cantidad_asistentes}}</p>
<p>Nombre organizador: {{$extension->organizador_actividad}}</p>
<p><img src="public/arvhivos/{{$extension->evidencia}}" alt="Imagen de la actividad"  /></p>



</body>
</html>
