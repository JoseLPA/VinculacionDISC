<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../image/favicon.ico">

    <title>VinculacionDisc</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#Formulario").submit(function( event ){
                event.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '../php/contacto2.php',
                    data: $(this).serialize(),
                    success: function(data){
                        $("#respuesta").slideDown();
                        $("#respuesta").html(data);
                        $('#respuesta2').modal('show');
                        document.getElementById('Formulario').reset();
                    }
                });

                return false;
            });
        });
    </script>
</head>


<body>


<header>
    <h1>Registrar Aprendizaje más servicio.</h1>
</header>
<!-- Content -->
<section>
    <div class="container">

        <div class="container">
            <form role="form" id="Formulario" action="../php/contacto2.php" method="POST">

                <div class="form-group">
                    <label class="control-label" for="nombre_asignatura">Nombre de asignatura</label>
                    <input type="text" class="form-control" id="nombre_asignatura" name="nombre_asignatura" placeholder="Introduzca el nombre de la asignatura" required autofocus />
                </div>

                <div class="form-group">
                    <label class="control-label" for="nombre_profesor">Nombre de profesor</label>
                    <input type="text" class="form-control" id="nombre_profesor" name="nombre_profesor" placeholder="Introduzca el nombre del profesor" required autofocus />
                </div>

                <div class="form-group">
                    <label class="control-label" for="cantidad_estudiantes">Cantidad de estudiantes</label>
                    <select name="cantidad_estudiantes" class="form-control">
                        @for ($i = 0; $i < 60; $i++)
                            <option value={{ $i+1 }}>{{ $i+1 }}</option>
                        @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="nombre_socio">Nombre del socio</label>
                    <input type="text" class="form-control" id="nombre_socio" name="nombre_socio" placeholder="Introduzca el nombre del socio" required autofocus />
                </div>

                <div class="form-group">
                    <label class="control-label" for="semestre">Semestre</label>
                    <select name="semestre" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="año">Año</label>
                    <select name="año" class="form-control">
                        @for ($i = 0; $i < 101; $i++)
                            <option value={{ $i+2000 }}>{{ $i+2000 }}</option>
                        @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label for="ejemplo_archivo_1">Adjuntar un archivo de acuerdo</label>
                    <input type="file" id="ejemplo_archivo_1">
                    <p class="help-block">Evidencia: Acuerdo(obligatorio), Fotos(Opcional).</p>
                </div>

                <div class="form-group">

                    {!! Form::open(['route' => 'aprendizajeServicio.store', 'files' => true]) !!}


                    <input type="submit" class="btn btn-primary" value="Enviar">
                    {!! Form::close() !!}

                    <input type="reset" class="btn btn-default" value="Limpiar">
                </div>
                <div id="respuesta" style="display: none;"></div>
            </form>
        </div>
    </div>
</section>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>