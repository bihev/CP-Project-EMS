<!DOCTYPE html>
<htmal lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoort" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        
        <title>Employee</title>
        
        @extends('includes.header')
 @section('content')       
    </head>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
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
          <a href="/profile" class="d-block">{{ Auth:: user()->name}}</a>
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HOME
<!--                <i class="right fas fa-angle-left"></i>-->
              </p>
            </a>
          
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="users" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User List
              </p>
            </a>
          </li>
          
<!--          <li class="nav-header">EXAMPLES</li>-->
          <li class="nav-item">
            <a href="/events" class="nav-link">
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
              
            
          
          
        
         <!-- <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>-->
<!--          <li class="nav-header">LABELS</li>-->
         <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
       <div class="main-header navbar navbar-expand navbar-white navbar-light">
        <div class="container-fluid">
            <div class="jumbotron">
                <h2 align="center">Employees of the Company</h2><br>
              <table class="table table-striped table-condensed" width="10%">
              <thead>
                  <tr>
                      <th scope="col"> ID </th>
                      <th scope="col"> Name </th>
                      <th scope="col"> email </th>
                      <th scope="col"> Address </th>
                      <th scope="col"> Department </th>
                      <th scope="col"> joined </th>
                     <!-- <th scope="col"> action </th>-->
                  </tr>
              </thead>
               
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th> {{ $user->id }} </th>
                        <th> {{ $user->name }} </th>
                        <th> {{ $user->email }} </th>
                        <th> {{ $user->address }} </th>
                        <th> {{ $user->department }} </th>
                        <th> {{ $user->created_at }} </th>
                        
                       <!-- <td class="text-right">
                            <a href="#" class="btn btn-primary badge-pill" style="width:80px;"> EDIT </a>
                            <a href="#" class="btn btn-danger badge-pill" style="width:80px;"> Delete </a>
                        </td>-->
                    </tr>
                    @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>    
 
  </htmal>          
         
        @endsection
        
          
          
 
          
        </div>
      </div>