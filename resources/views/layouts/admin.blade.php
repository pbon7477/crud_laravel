<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud con Laravel 10</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{ asset('dist/css/adminlte.min.css') }} ">
  <!-- style --->
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

  <!-- sweetalert-->
  <script src="{{ asset('dist/js/sweetalert.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/admin') }}" class="nav-link">Crud con Laravel</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!--FullScreen--->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

        <!--Navbar right empty--->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.navbar -->



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/admin')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CRUD</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('dist/img/dejanira.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">

            <a href="#" class="d-block">{{ Auth::user()->name  }}</a>

          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="#" class="nav-link bg-info btn-sm">
                <i class="fa fa-user"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/usuarios')  }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista de usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/usuarios/create')}}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Crear usuario</p>
                  </a>
                </li>
              </ul>
            </li>


            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif

            @else
            <li class="nav-item  "><hr>

              <a class="nav-link border border-secondary btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            


               <p>                
                <i class="nav-icon fa fa-sign-out-alt"></i>Cerrar sesion
               </p>

              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>

            </li>
            @endguest

            <!-- END Authentication Links -->

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->


    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <br>

          <!--sweet Alert-->
        @if ( ( $mensaje = Session::get('mensaje') ) && ( $icono = Session::get('icono') )  )

        <script>
              Swal.fire({
              title: "Mensaje!",
              text: "{{ $mensaje }}",
              icon: "{{ $icono }}"
              });
        </script>
                      
        @endif
          <!--end sweet Alert-->

      <!--Contenido del sistema-->

      <div class="container">

        @yield('content')

      </div>

      <!--end Contenido del sistema-->

    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>

      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src=" {{ asset('plugins/jquery/jquery.min.js') }} "></script>
  <!-- Bootstrap 4 -->
  <script src=" {{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <!-- AdminLTE App -->
  <script src=" {{ asset('dist/js/adminlte.min.js') }} "></script>

</body>

</html>