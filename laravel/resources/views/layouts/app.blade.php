<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{Config::get('app.name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/_all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/dataTables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datepicker/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminTLE/bootstrap-dialog.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/adminTLE/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

    @yield('css')
    <style>
        .table-bordered thead tr{
            background-color: #a1a194;
            color: white;
            font-weight: 600;
        }
        .skin-blue .main-header .logo,.skin-blue .main-header .navbar,.skin-blue .sidebar-form input[type="text"], .skin-blue .sidebar-form .btn{
            background-color: #464646 !important;
        }
        .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side{
            background-color: #A1A194 !important;
        }
        .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a{
            background-color: #5B605F !important;
            border-left-color: #A90641 !important;
            border-left: 1px solid transparent;
        }
        .skin-blue .sidebar-menu>li>a{
            border-bottom: 1px solid rgba(0,0,0,0.1) !important;
        }
        .skin-blue .sidebar-form input[type="text"]:focus, .skin-blue .sidebar-form input[type="text"]:focus+.input-group-btn .btn {
            background-color: #666b68;
            color: #fff;
        }
        .skin-blue .treeview-menu>li>a{
            color: white;
        }
        .fa-circle-o:before {
            color: #a90641;
            content: "\f10c";
        }
        .skin-blue .sidebar-menu>li.header{
                background: #919185;
                color: white;
                font-size: 1.2em;
        }
        .btn-app-red {
            background-color: #a90641;
            border-color: #5a0725;
            color: white;
        }
        .btn-app-red:hover{
            background-color: #a90641;
            color: white; 
            font-size: 1.2 rem;
        }
        .fa-app{color:#464646;}
        .skin-blue .sidebar-menu>li>.treeview-menu {
            background: rgba(91, 96, 95, 0.84);
        }
        .bg-app {
            background-color: #A90641 !important;
        }
        .skin-blue .main-header .navbar .sidebar-toggle:hover{
            background-color: #5B605F !important;
        }
        .skin-blue .sidebar a {
            color: #b8c7ce;
            color: white;
            font-family: sans-serif;
        }
        .sidebar-menu>li .label, .sidebar-menu>li .badge {
            margin-right: -4px;
        }
        footer a{
            color: #A90641 !important;
        }
        table.table-bordered tbody th, table.table-bordered tbody td {
            border-left-width: 1; 
            border-bottom-width: 1;
        }
        .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
            border: 1px solid #ddd;
        }
    </style>
</head>

<body class="skin-blue sidebar-mini">
@if(Config::get('app.login'))
    @if (!Auth::guest())
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="{!! url('/') !!}" class="logo">
                    <b>{{Config::get('app.name')}}</b>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <a href="{!! url('/logout') !!}" class="btn btn-sign-out btn-flat"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Salir
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer" style="max-height: 100px;text-align: center">
                <strong>Copyright © 2016-2017 <a href="#">carlos anselmi</a>.</strong> All rights reserved.
            </footer>

        </div>
    @else
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{!! url('/') !!}">
                        {{Config::get('app.name')}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{!! url('/home') !!}">Home</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{!! url('/login') !!}">Login</a></li>
                        <li><a href="{!! url('/register') !!}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @include('adminlte-templates::common.errors')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    @endif
@else
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                    <b>{{Config::get('app.name')}}</b>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer" style="max-height: 100px;text-align: center">
                <strong>Copyright © 2016-2017 <a href="#">carlos anselmi</a>.</strong> All rights reserved.
            </footer>

        </div>
@endif
    <!-- jQuery 3.1.1 -->
    <script src="{{ asset('js/adminTLE/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminTLE/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/adminTLE/select2.min.js') }}"></script>
    <script src="{{ asset('js/adminTLE/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminTLE/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/adminTLE/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/adminTLE/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/adminTLE/bootstrap-dialog.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/adminTLE/validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AppScript.js') }}"></script>
    @yield('scripts')
</body>
</html>