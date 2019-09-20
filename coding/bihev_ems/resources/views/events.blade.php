<!DOCTYPE html>
<htmal lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoort" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calendar</title>
        
        <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">EMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth:: user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HOME
<!--                <i class="right fas fa-angle-left"></i>-->
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="users" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User List
              </p>
            </a>
          </li>
          
<!--          <li class="nav-header">EXAMPLES</li>-->
          <li class="nav-item has-treeview menu-open">
            <a href="/events" class="nav-link active">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
<!--                <span class="badge badge-info right">2</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="userphoto" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>about us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>contact</p>
                </a>
              </li>
            </ul>
          </li>
          
              <li class="nav-item"> <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                  </form></li>
          </ul>
        </nav>
              </div>
    </aside>
    
       
       @include('components.header')
        <div class="container">
           <div class="jumbotron">
           <div class="row">
               <a href="/addevent" class="btn btn-success">Add Events</a>
               <a href="/displaydata" class="btn btn-primary">Edit Events</a>
               <a href="/deleteevent" class="btn btn-danger">delete Events</a>
           </div>
            <div class="row">
               
                
              @if(count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              
              @if(\Session::has('success'))
              <div class="aleret alert-success">
                  <p>{{ \Session::get('success') }}</p>
              </div>
               @endif
               
                <div class="col-md-8-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: #2e6da4; color: white;" align=middle>
                            <h3>full calendar </h3>
                        </div>
                        <div class="panel-body" height=100%>
                            {!! $calendar->calendar() !!}
                            {!! $calendar->script() !!}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </nav>
        </div>
        
    </body>
</htmal>