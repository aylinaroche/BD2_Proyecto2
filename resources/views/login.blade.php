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

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
        <div class="container">
            @if(session()->has('flash'))
                <div class="alert alert-info">{{ session('flash') }}</div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group row" {{ $errors->has('nickname')? 'has-error' : ''}}>
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nickname') }}</label>
                                    <div class="col-md-6">
                                        <input id="nickname" type="text" class="form-control" name="nickname" value="" autocomplete="nickname" autofocus>
                                    </div>
                                    {!! $errors->first('nickname','<span class="help-block">:message</span>') !!}
                                </div>

                                <div class="form-group row" {{ $errors->has('password')? 'has-error' : ''}}>
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" autocomplete="current-password">
                                    </div>
                                    {!! $errors->first('password','<span class="help-block">:message</span>') !!}

                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary"> {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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