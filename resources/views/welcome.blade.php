<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vinculación con el medio</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<style type="text/css">
    .navbar {
        background-color: #23415b;
    }
    .navbar .navbar-brand {
        color: #ffffff;
    }
    .navbar .navbar-brand:hover,
    .navbar .navbar-brand:focus {
        color: #e6ecf2;
    }
    .navbar .navbar-text {
        color: #ffffff;
    }
    .navbar .navbar-text a {
        color: #e6ecf2;
    }
    .navbar .navbar-text a:hover,
    .navbar .navbar-text a:focus {
        color: #e6ecf2;
    }
    .navbar .navbar-nav .nav-link {
        color: #ffffff;
        border-radius: .25rem;
        margin: 0 0.25em;
    }
    .navbar .navbar-nav .nav-link:not(.disabled):hover,
    .navbar .navbar-nav .nav-link:not(.disabled):focus {
        color: #e6ecf2;
    }
    .navbar .navbar-nav .nav-item.active .nav-link,
    .navbar .navbar-nav .nav-item.active .nav-link:hover,
    .navbar .navbar-nav .nav-item.active .nav-link:focus,
    .navbar .navbar-nav .nav-item.show .nav-link,
    .navbar .navbar-nav .nav-item.show .nav-link:hover,
    .navbar .navbar-nav .nav-item.show .nav-link:focus {
        color: #e6ecf2;
        background-color: #4e7ca8;
    }
    .navbar .navbar-toggle {
        border-color: #4e7ca8;
    }
    .navbar .navbar-toggle:hover,
    .navbar .navbar-toggle:focus {
        background-color: #4e7ca8;
    }
    .navbar .navbar-toggle .navbar-toggler-icon {
        color: #ffffff;
    }
    .navbar .navbar-collapse,
    .navbar .navbar-form {
        border-color: #ffffff;
    }
    .navbar .navbar-link {
        color: #ffffff;
    }
    .navbar .navbar-link:hover {
        color: #e6ecf2;
    }

    @media (max-width: 575px) {
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #ffffff;
        }
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #e6ecf2;
        }
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #e6ecf2;
            background-color: #4e7ca8;
        }
    }

    @media (max-width: 767px) {
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #1C2D3F;
        }
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #1C2D3F;
        }
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #1C2D3F;
            background-color: #4e7ca8;
        }
    }

    @media (max-width: 991px) {
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #1C2D3F;
        }
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #1C2D3F;
        }
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #1C2D3F;
            background-color: #4e7ca8;
        }
    }

    @media (max-width: 1199px) {
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #1C2D3F;
        }
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #1C2D3F;
        }
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #1C2D3F;
            background-color: #4e7ca8;
        }
    }

    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #1C2D3F;
    }
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #1C2D3F;
    }
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #1C2D3F;
        background-color: #4e7ca8;
    }

    .navbar-nav > li > .dropdown-menu {
        background-color: #23415B;
    }

    body{
        background-color: #1c2d3f;
    }
</style>

<body>

<div id="app" >
    <div class="container">
        <a href="http://www.ucn.cl"><img width="400px" height="90px" src ="http://subirimagen.me/uploads/20181227011736.png"></a>
    </div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Vinculacion con el Medio
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @else

                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Administración <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-rightD" aria-labelledby="navbarDropdown">

                                <a style="color:#FFFFFF" class="dropdown-item" href="{{ route('aprendizajeServicio.index') }}">Administrar actividades de A+S</a>

                                <a style="color:#FFFFFF" class="dropdown-item" href="{{ route('actividadExtension.index') }}">Administrar actividades de extensión</a>

                                <a style="color:#FFFFFF" class="dropdown-item" href="{{ route('actividadTitulacion.index') }}">Administrar actividades de titulación</a>

                                <a style="color:#FFFFFF" class="dropdown-item" href="{{ route('convenio.index') }}">Administrar Convenios</a>

                                <a style="color:#FFFFFF" class="dropdown-item" href="{{ route('titulado.index') }}">Administrar titulados</a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-rightD" aria-labelledby="navbarDropdown">
                                <a style="color:#FFFFFF" class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mensajes de exito -->
    @if(session('info'))
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- Mensajes de error -->
    @if(count($errors))
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<main class="py-4">
    @yield('---')
</main>

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://subirimagen.me/uploads/20181226211301.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"  src="http://subirimagen.me/uploads/20181226211313.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="300px" src="http://subirimagen.me/uploads/20181226211307.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<main class="py-4">
    @yield('---')
</main>

<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <h1>Vinculación con el medio DISC </h1>
        <p>Bienvenido al sistema Vinculación con el medio DISC</p>
        <p>Una de las tareas principales de la Dirección General de Vinculación con el Medio es fomentar y articular las diferentes relaciones bidireccionales que posee la Universidad con su entorno. En este sentido, la Universidad comprende la Vinculación con el Medio como una de sus misiones fundamentales.

            A través de este fondo concursable, la institución, con la colaboración de Antofagasta Minerals y mediante una donación universitaria, busca promover aquellos proyectos que fomenten la vinculación académica entre la Universidad y su entorno, donde se generen relaciones de carácter bidireccional y que posean un impacto medible, tanto al interior de la UCN como en el entorno.</p>
    </div>


    <div class="middle">
        <div class="container">

            <div class="row">

                <div class="col-sm-4 miniseccion col-xs-12">
                    <a class="img" href="http://www.ucn.cl/vinculacion/alumni/">
                        <img width="360" height="220" src="http://www.ucn.cl/wp-content/uploads/2014/04/fachada-ucn-pregrado-360x220.jpg" class="attachment-chico size-chico wp-post-image" alt="" />
                    </a>
                    <h3><a href="http://www.ucn.cl/vinculacion/alumni/" title="ir a Alumni">Alumni</a></h3>
                    <p style="color:#FFFFFF";>La UCN busca generar y mantener el nexo de los egresados con su Alma Mater, promoviendo actividades académicas y de desarrollo orientadas a nuestros ex alumnos.</p>
                </div>

                <div class="col-sm-4 miniseccion col-xs-12">
                    <a class="img" href="http://www.ucn.cl/vinculacion/extension-universitaria/">
                        <img width="360" height="220" src="http://www.ucn.cl/wp-content/uploads/2014/09/Chela1-360x220.jpg" class="attachment-chico size-chico wp-post-image" alt="" />
                    </a>
                    <h3><a href="http://www.ucn.cl/vinculacion/extension-universitaria/" title="ir a Extensión Universitaria">Extensión Universitaria</a></h3>
                    <p style="color:#FFFFFF";>La UCN aporta al desarrollo cultural y patrimonial a través de diversas instancias.</p>
                </div>

                <div class="col-sm-4 miniseccion col-xs-12">
                    <a class="img" href="http://www.ucn.cl/vinculacion/alianzas-ucn/">
                        <img width="360" height="220" src="http://www.ucn.cl/wp-content/uploads/2014/08/alianzas-360x220.jpg" class="attachment-chico size-chico wp-post-image" alt="" />
                    </a>
                    <h3><a href="http://www.ucn.cl/vinculacion/alianzas-ucn/" title="ir a Alianzas UCN">Alianzas UCN</a></h3>
                    <p style="color:#FFFFFF";>Generamos alianzas que fomentan la calidad de nuestra comunidad educativa.</p>
                </div>

                <div class="col-sm-4 miniseccion col-xs-12">
                    <a class="img" href="http://www.ucn.cl/vinculacion/organismos-vinculados/">
                        <img width="360" height="220" src="http://www.ucn.cl/wp-content/uploads/2014/08/OrganismosAlianza-360x220.jpg" class="attachment-chico size-chico wp-post-image" alt="" />
                    </a>
                    <h3><a href="http://www.ucn.cl/vinculacion/organismos-vinculados/" title="ir a Organismos Vinculados">Organismos Vinculados</a></h3>
                    <p style="color:#FFFFFF";>Nos vinculamos con organismos con quienes compartimos valores y principios del proceso de formación educativa.</p>
                </div>

                <div class="col-sm-4 miniseccion col-xs-12">
                    <a class="img" href="http://www.ucn.cl/sobre-ucn/entidades-relacionadas/">
                        <img width="360" height="220" src="http://www.ucn.cl/wp-content/uploads/2014/07/ruinas-360x220.jpg" class="attachment-chico size-chico wp-post-image" alt="" />
                    </a>
                    <h3><a href="http://www.ucn.cl/sobre-ucn/entidades-relacionadas/" title="ir a Entidades Relacionadas">Entidades Relacionadas</a></h3>
                    <p style="color:#FFFFFF";>Recuperamos la historia de Antofagasta y fortalecemos la formación técnica de la Región.</p>
                </div>
            </div>
        </div>
    </div>

</div> <!-- /container -->
</body>
</html>