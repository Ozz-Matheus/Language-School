<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:url"           content="http://www.e4esys.com" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="E4e Institute | Plataform" />
<meta property="og:description"   content="Panel de Administración de E4e" />
<meta property="og:image"         content="{{ asset('images/e4e-logotipo.jpg')}}" />
<meta name="description" content="Panel de Administración de E4e"/>
<meta name="author" content="Unnodo">
<meta name="Robots" content="all"/>
<meta name="Distribution" content="global"/>
<title>@yield('meta-title', config('app.name') . " | Plataform" )</title>
<link rel="shortcut icon" href="{{ asset('favicon/e4e-cumbres-favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('favicon/e4e-cumbres-57.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('favicon/e4e-cumbres-114.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('favicon/e4e-cumbres-72.png')}}" />
<!--  stylesheet  -->
<link href="{{ asset('stylesheets/stylesheet.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.responsive.css')}}">
@stack('styles')
<!--  stylesheet  -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="app-layout"
      class="cbp-spmenu-push {{ request()->is('employee/*') ? 'employee' : '' }}{{ request()->is('student/*') ? 'student' : '' }}" >
<header>
@if( Auth::user() )
<div class="navbar navbar-default navbar-fixed-top">
  <button type="button" class="navbar-toggle" id="showLeftPush">
    <span class="sr-only">Toggle Navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>
@endif 
  @if(!Auth::guard('employee')->guest())
    <a id="employee" class="navbar-brand logo" href="{{ url('employee/dashboard') }}"></a><!-- /. Branding Image -->  
  @elseif(!Auth::guard('student')->guest())
    <a id="student" class="navbar-brand logo" href="{{ url('/student/home') }}"></a><!-- /. Branding Image -->
  @else
    <a id="home" class="navbar-brand logo" href="{{ url('/') }}"></a><!-- /. Branding Image -->
  @endif
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left text-left" id="cbp-spmenu-s1">
  <div class="separator"></div>
  @if(!Auth::guard('employee')->guest())
    @include('layouts.partials.AuthEmployee')
  @elseif(!Auth::guard('student')->guest())
    @include('layouts.partials.AuthStudent')
  @endif 
</nav>
</header>
<main>
  <div class="container flash">
  <div class="row">
  <div id="flash" class="col-md-10 col-md-offset-1" >
    @if( session()->has('flash') )
      <div class="alert alert-success">
        {{ session('flash') }}
      </div>
    @endif
  </div>
  </div><!-- row -->
  </div><!-- container -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  @yield('content')
              </div>
          </div>
      </div>
  </div>
</main>    
<footer>
<div class="container">
<div class="col-xs-12">
<span role="button" onclick="window.open('http://www.unnodo.com/','_blank')">
  Copyright © Unnodo. All rights reserved.
</span>
</div>
</div><!-- container -->
</footer>
<!--  script  -->
<!-- DataTables -->
<script src="{{ asset('scripts/script.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script>
  $(function () {
    $('.table-striped').DataTable({
        responsive: true,
        "order": [ 0, 'desc' ], 
        "language": { "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json" }
      });
  });
</script>
@stack('scripts')
<!--  script  -->
<!--
Description: Official theme for E4e Institute.
Start of project: 01-09-2017.
Version: 2.0
Full Stack Developer: Orlando Montesinos Quintana. / Email: montesinos.quintana@gmail.com.
Update of project: 15-02-2018.
-->
</body>
</html>