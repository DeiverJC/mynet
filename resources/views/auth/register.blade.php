<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('ampleadmin/plugins/images/favicon.png') }}">
    <title>Registrarse - {{ config('app.name') }}</title>
    <link href="{{ asset('ampleadmin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ampleadmin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('ampleadmin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('ampleadmin/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel">
                <a href="javascript:void(0)" class="p-20 di"><img src="{{ asset('ampleadmin/plugins/images/admin-logo.png') }}"></a>
                <div class="lg-content">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    <p class="text-muted">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum unde, repellendus sequi sed hic dicta!
                    </p> 
                    <a href="#" class="btn btn-rounded btn-danger p-l-20 p-r-20"> Visitar</a> 
                </div>
            </div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Registrarse</h3> <small>Introduzca sus datos a continuación.</small>
                <form class="form-horizontal new-lg-form" id="loginform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Name"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Confirm Password"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Crear cuenta</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-danger m-l-5"><b>Iniciar sesión</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('ampleadmin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('ampleadmin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ asset('ampleadmin/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('ampleadmin/js/waves.js') }}"></script>
    <script src="{{ asset('ampleadmin/js/custom.min.js') }}"></script>
    <script src="{{ asset('ampleadmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>