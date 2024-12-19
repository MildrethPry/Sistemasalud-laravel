<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de monitoreo de salud en tiempo real</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
    <!--Iconos de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- jQuery -->
    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    <!---Sweetalert--->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!---Datatable--->
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
                <a href="{{url('/admin')}}" class="nav-link">Sistema de monitoreo de salud en tiempo real</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notificaciones</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 solicitudes de amistad
                        <span class="float-right text-muted text-sm">12 horas</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 nuevos reportes
                        <span class="float-right text-muted text-sm">2 días</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
                </div>
            </li>
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Llámame cuando puedas...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas Atrás</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Recibí tu mensaje</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas Atrás</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">El tema va aquí</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas Atrás</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Ver todos los mensajes</a>
                </div>
            </li>
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Saluvital</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @can('admin.usuarios.index')
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-person"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/usuarios/create')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creación de usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/usuarios')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    @can('admin.secretarias.index')
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas bi bi-person-circle"></i>
                            <p>
                                Secretarias
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('admin/secretarias/create')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Creación de secretarias</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('admin/secretarias')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado de secretarias</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                        @endcan
                        @can('admin.pacientes.index')
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas bi bi-person-heart"></i>
                            <p>
                                Pacientes
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('admin/pacientes/create')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Creación de pacientes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('admin/pacientes')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado de pacientes</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                        @endcan
                        @can('admin.consultorios.index')

                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas bi bi-building-add"></i>
                            <p>
                                Consultorios
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('admin/consultorios/create')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Creación de consultorios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('admin/consultorios')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado de consultorios</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                        @endcan
                        @can('admin.doctores.index')
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas bi bi-people-fill"></i>
                            <p>
                                Doctores
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('admin/doctores/create')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Creación de doctores</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('admin/doctores')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado de doctores</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                        @endcan
                        @can('admin.horarios.index')
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas bi bi-calendar-check"></i>
                            <p>
                                Horarios
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('admin/horarios/create')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Creación de horarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/horarios') }}" class="nav-link" style="background-color: #9d1e15">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado de horarios</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                        @endcan
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" style="background-color: #9d1e15"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas bi bi-door-closed"></i>
                            <p>Cerrar Sesión</p>
                        </a>
                        <!-- Logout Form -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @if (($message = Session::get('mensaje')) && ($icono = Session::get('icono')))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "{{$icono}}",
                title: "{{$message}}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <div class="content-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>

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
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- En tu layout o vista -->
@section('scripts')
    <script src="{{url('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
    <!-- Tus scripts -->
@endsection
<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
