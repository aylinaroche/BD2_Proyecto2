<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BD2-Proyecto 2</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/">Proyecto 2</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/usuarios">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/productos">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Agregar Section -->
    <section id="signup" class="signup-section">
        <div class="container">
            @if(session()->has('flash'))
            <div class="alert alert-info">{{ session('flash') }}</div>
            @endif
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Agregar Usuario</h2>

                    <form class="form-inline d-flex" method="POST" action="create">
                        {{ csrf_field() }}

                        <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nombre" name="nombre" placeholder="Nombre">
                        {!! $errors->first('nombre','<span class="help-block">:message</span>') !!}
                        <HR width="80%">
                        <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="apellido" name="apellido" placeholder="Apellido">
                        {!! $errors->first('apellido','<span class="help-block">:message</span>') !!}
                        <HR width="80%">
                        <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="edad" name="edad" placeholder="Edad">
                        {!! $errors->first('edad','<span class="help-block">:message</span>') !!}
                        <HR width="80%">
                        <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nickname" name="nickname" placeholder="Nickname">
                        {!! $errors->first('nickname','<span class="help-block">:message</span>') !!}
                        <HR width="80%">
                        <input type="password" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="password" name="password" placeholder="Password">
                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        <HR width="80%">
                        <input id="password-confirm" type="password" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="password_confirmation" placeholder="Confirmar Password">
                        {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
                        <HR width="80%">

                        <button type="submit" class="btn btn-primary mx-auto">Agregar</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section id="signup" class="signup-section">
        <div class="container">
             <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Usuarios</h2>

                    <form class="form-inline d-flex" method="POST" action="create">
                        {{ csrf_field() }}

                        

                        <button type="submit" class="btn btn-primary mx-auto">Agregar</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
        <div class="container">Aylin Aroche 201404368 - Alejandro Hernandez 201404174
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>