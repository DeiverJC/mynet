<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/ampleadmin/plugins/images/favicon.png') }}">
    <title>@yield('title', 'Inicio') | {{ config('app.name') }}</title>
    <link href="{{ asset('/ampleadmin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/ampleadmin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('ampleadmin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/ampleadmin/css/colors/default.css') }}" id="theme" rel="stylesheet">
    @stack('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>

    <div id="wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">

                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">
                            @yield('title')
                        </h4> 
                    </div>
                    <!-- /.page title -->

                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            @if(Request::is('home'))
                                <li class="active"> <i class="fa fa-home"></i> Inicio</li>
                            @else
                                <li><a href="#">Inicio</a></li>
                            @endif

                            @yield('breadcrumb')
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->

                </div>

                <!-- .row -->
                <div class="row">
                    @yield('content')
                </div>
                <!-- .row -->

            </div>
            <footer class="footer text-center"> 
                <script>document.write(new Date().getFullYear());</script> &copy; {!! config('app.name') !!}
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>

    <script src="{{ asset('/ampleadmin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/ampleadmin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ asset('/ampleadmin/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/ampleadmin/js/waves.js') }}"></script>
    <script src="{{ asset('/ampleadmin/js/custom.js') }}"></script>
    @stack('scripts')
</body>

</html>