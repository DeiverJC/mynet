<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">

        <div class="top-left-part">
            <a class="logo" href="index.html">
                <b>
                    <img src="{{ asset('/ampleadmin/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" />
                    <img src="{{ asset('/ampleadmin/plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" />
                </b>
                <span class="hidden-xs">
                    <img src="{{ asset('/ampleadmin/plugins/images/admin-text.png') }}" alt="home" class="dark-logo" />
                    <img src="{{ asset('/ampleadmin/plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" />
                </span> 
            </a>
        </div>

        <ul class="nav navbar-top-links navbar-left">
            <li>
                <a href="javascript:void(0)" class="open-close waves-effect waves-light">
                    <i class="ti-menu"></i>
                </a>
            </li>
        </ul>
        
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> 
                </form>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
                    <img src="{{ asset('/ampleadmin/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle">
                    <b class="hidden-xs">{!! auth()->user()->name !!}</b><span class="caret"></span> 
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img">
                                <img src="{{ asset('/ampleadmin/plugins/images/users/varun.jpg') }}" alt="user" />
                            </div>
                            <div class="u-text">
                                <h4>{!! auth()->user()->name !!}</h4>
                                <p class="text-muted">{!! auth()->user()->email !!}</p>
                                <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">
                                    Ver perfil
                                </a>
                            </div>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-user"></i> Mi perfil</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> Mi balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Configuraciones</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout')  }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
</nav>