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
    <h1>Eliminar actividad de extension</h1>
</header>
<!-- Content -->
<section>
    <div class="container">

        <div class="container">
            <form role="form" id="Formulario" action="../php/contacto2.php" method="POST">

                <div class="form-group">
                    <label class="control-label" for="titulo">Titulo de actividad</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introduzca el titulo de la actividad" required autofocus />
                </div>
                <div class="form-group">
                    <label class="control-label" for="nombre_expositor">Nombre de expositores o relatores</label>
                    <input type="text" class="form-control" id="nombre_expositor" name="nombre_expositor" placeholder="Introduzca nombre de expositores o relatores" required autofocus />
                </div>
                <div class="form-group">
                    <label class="control-label" for="lugar">Lugar donde se realizó</label>
                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Introduzca el lugar donde se realizó" required autofocus />
                </div>
                <div class="form-group">
                    <label class="control-label" for="nombre_organizador">Nombre del organizador de la actividad</label>
                    <input type="text" class="form-control" id="nombre_organizador" name="nombre_organizador" placeholder="Introduzca el nombre del organizador de la actividad" required autofocus />
                </div>
                <div class="form-group">
                    <label for="ejemplo_archivo_1">Adjuntar un archivo de evidencia</label>
                    <input type="file" id="ejemplo_archivo_1">
                    <p class="help-block">Evidencia: Lista de asistencia(obligatorio), Fotos(Opcional).</p>
                </div>

                <div class="form-group">
                    <label class="control-label" for="convenio">Convenio de colaboración</label>
                    <select name="convenio" class="form-control">
                        <option value="ingresar_convenio">Seleccione el convenio</option>
                        <option value="capstone">Capstone</option>
                        <option value="marco">Marco</option>
                        <option value="específico">Específico</option>
                        <option value="a+s">A+S</option>
                        <option value="ninguna">Ninguno</option>
                    </select>
                </div>

                <label>Fecha de la actividad(00/00/0000)</label>
                <div class="form-list__input-inline">
                    <input type="text" name="cc_dia" placeholder="Dia"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                    <input type="text" name="cc_mes" placeholder="Mes"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                    <input type="text" name="cc_año" placeholder="Año"  pattern="\\d*" minlength="4" maxlength="4" required="" />
                </div>

                <div class="form-group">
                    <label class="control-label" for="Mensaje">Comentario</label>

                    <textarea rows="5" cols="30" class="form-control" id="Mensaje" name="Mensaje" placeholder="Introduzca comentario (Opcional)" required ></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar">
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


