<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>@yield('page-name')</title>
    <style>
        table.dataTable {
            border-collapse:collapse !important;
        }
    </style>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('tema/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('tema/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('tema/plugins/morrisjs/morris.min.css')}}" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('tema/css/main.css')}}">
<link rel="stylesheet" href="{{asset('tema/css/color_skins.css')}}">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{asset('tema/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">


{{--    selrct2--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <style>
        body.menu_dark{
            background: black !important;
        }
        .overlay{
            background-color: rgba(255,255,255,0.5);
            backdrop-filter: blur(10px);
        }
        .modal-backdrop {
            background-color: rgba(255,255,255,0.5) !important;
            backdrop-filter: blur(10px) !important;
        }
    </style>

</head>
<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('/img/logo.png')}}" width="48" height="48" alt="Compass"></div>
        <p>Por favor, aguarde...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar" style="background: linear-gradient(
45deg
, #49cdd0, #0C418D); ">
    <div class="col-12">
        <!-- <div class="navbar-header" style="background: linear-gradient(45deg, #49cdd0, #0C418D); "> -->
        <div class="navbar-header" style="background:  #0C418D">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/">
{{--                <img src="{{asset('/img/logo.png')}}" width="30" alt="Compass">--}}
                <span class="m-l-10" style="color:white">{{env("APP_NAME")}}</span>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li>
                <a href="#" class="mega-menu" data-close="true"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            <li class=""><a href="/config" class="js-right-sidebarr"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
@include('layouts.admin.includes.sidebar')


{{--</aside>--}}

<!-- Right Sidebar -->
@include('layouts.admin.includes.rightsidebar')



<!-- Chat-launcher -->
{{--<div class="chat-launcher"></div>--}}
{{--<div class="chat-wrapper">--}}
{{--    <div class="card">--}}
{{--        <div class="header">--}}
{{--            <ul class="list-unstyled team-info margin-0">--}}
{{--                <li class="m-r-15"><h2>Doctor Team</h2></li>--}}
{{--                <li>--}}
{{--                    <img src="{{asset('tema/images/xs/avatar2.jpg')}}" alt="Avatar">--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{asset('tema/images/xs/avatar3.jpg')}}" alt="Avatar">--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{asset('tema/images/xs/avatar4.jpg')}}" alt="Avatar">--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{asset('tema/images/xs/avatar6.jpg')}}" alt="Avatar">--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="body">--}}
{{--            <div class="chat-widget">--}}
{{--            <ul class="chat-scroll-list clearfix">--}}
{{--                <li class="left float-left">--}}
{{--                    <img src="{{asset('tema/images/xs/avatar3.jpg')}}" class="rounded-circle" alt="">--}}
{{--                    <div class="chat-info">--}}
{{--                        <a class="name" href="#">Alexander</a>--}}
{{--                        <span class="datetime">6:12</span>--}}
{{--                        <span class="message">Hello, John </span>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="right">--}}
{{--                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>--}}
{{--                </li>--}}
{{--                <li class="right">--}}
{{--                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>--}}
{{--                </li>--}}
{{--                <li class="left float-left"> <img src="{{asset('tema/images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">--}}
{{--                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>--}}
{{--                </li>--}}
{{--                <li class="left float-left"> <img src="{{asset('tema/images/xs/avatar1.jpg')}}" class="rounded-circle" alt="">--}}
{{--                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>--}}
{{--                </li>--}}
{{--                    <li class="right">--}}
{{--                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            </div>--}}
{{--            <div class="input-group p-t-15">--}}
{{--                <input type="text" class="form-control" placeholder="Enter text here...">--}}
{{--                <span class="input-group-addon">--}}
{{--                    <i class="zmdi zmdi-mail-send"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>
                    @yield('page-name')
                <small class="text-muted">Bem vindo a {{env("APP_NAME")}}</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
{{--                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">--}}
{{--                    <i class="zmdi zmdi-plus"></i>--}}
{{--                </button>--}}
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
{{--                    <li class="breadcrumb-item active">Dashboard</li>--}}
                    @yield('breadcrumb')
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
{{--        Erros--}}
        @if ($errors->any())
            <div class="alert alert-danger" style="border-radius: 5px">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
{{--        Alertas--}}
        @if(session('status'))
            <div class="alert alert-{{session('status')==200?'success':'danger'}}">
                {{session('message')}}
            </div>
        @endif

        @yield('conteudo')
    </div>
</section>
@yield('modals')

<!-- Jquery Core Js -->
<script src="{{asset('tema/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('tema/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('tema/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('tema/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('tema/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{asset('tema/bundles/countTo.bundle.js')}}"></script> <!-- Jquery CountTo Plugin Js -->
<script src="{{asset('tema/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->

<script src="{{asset('tema/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('tema/js/pages/index.js')}}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('tema/bundles/datatablescripts.bundle.js')}}"></script>

<script src="{{asset('tema/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>


@yield('js')

</body>
</html>
