@extends('includes.header')
  <!-- /.navbar -->
@section('content')
 
  <!-- Main Sidebar Container -->
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
          <li class="nav-item">
            <a href="users" class="nav-link">
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
    
  <!-- Content Wrapper. Contains page content -->
  <div class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="col-md-8"> <div class="tab-content"><div role="tabpanel" id="profile" class="tab-pane active"><div><div><div class="panel panel-default"><div class="panel-heading">Profile Photo</div> <div class="panel-body"><!----> <form role="form" class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label">&nbsp;</label> <div class="col-md-6"><span role="img" class="profile-photo-preview" style="background-image: url(&quot;https://www.gravatar.com/avatar/031c98e0f2ae1d513874ba1e7583de8c.jpg?s=200&amp;d=mm&quot;);"></span></div></div> <div class="form-group"><label class="col-md-4 control-label">&nbsp;</label> <div class="col-md-6"><label type="button" class="btn btn-primary btn-upload"><span>Select New Photo</span> <input type="file" name="photo" class="form-control"></label></div></div></form></div></div></div> <div class="panel panel-default"><div class="panel-heading">Contact Information</div> <div class="panel-body"><!----> <form role="form" class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label">Name</label> <div class="col-md-6"><input type="text" name="name" class="form-control"> <span class="help-block" style="display: none;">
                            
                        </span></div></div> <div class="form-group"><label class="col-md-4 control-label">E-Mail Address</label> <div class="col-md-6"><input type="email" name="email" class="form-control"> <span class="help-block" style="display: none;">
                            
                        </span></div></div> <div class="form-group"><div class="col-md-offset-4 col-md-6"><button type="submit" class="btn btn-primary">

                            Update
                        </button></div></div></form></div></div></div></div> <div role="tabpanel" id="security" class="tab-pane"><div><div class="panel panel-default"><div class="panel-heading">Update Password</div> <div class="panel-body"><!----> <form role="form" class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label">Current Password</label> <div class="col-md-6"><input type="password" name="current_password" class="form-control"> <span class="help-block" style="display: none;">
                            
                        </span></div></div> <div class="form-group"><label class="col-md-4 control-label">Password</label> <div class="col-md-6"><input type="password" name="password" class="form-control"> <span class="help-block" style="display: none;">
                            
                        </span></div></div> <div class="form-group"><label class="col-md-4 control-label">Confirm Password</label> <div class="col-md-6"><input type="password" name="password_confirmation" class="form-control"> <span class="help-block" style="display: none;">
                            
                        </span></div></div> <div class="form-group"><div class="col-md-offset-4 col-md-6"><button type="submit" class="btn btn-primary">

                            Update
                        </button></div></div></form></div></div></div></div> <div role="tabpanel" id="github" class="tab-pane"><div><div class="panel panel-default"><div class="panel-heading">Connect To GitHub</div> <div class="panel-body"><a href="/github/auth"><button class="btn btn-default"><i class="fa fa-btn fa-github"></i>Connect To GitHub
                    </button></a></div></div> <div><!----></div> <!----> <!----></div></div> <div role="tabpanel" id="api" class="tab-pane"><div><div><div><div class="panel panel-default"><div class="panel-heading">
                Create API Token
            </div> <div class="panel-body"><form role="form" class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label">Token Name</label> <div class="col-md-6"><input type="text" name="name" class="form-control"> <span class="help-block" style="display: none;">
                                
                            </span></div></div> <!----> <!----> <div class="form-group"><div class="col-md-offset-4 col-md-6"><button type="submit" class="btn btn-primary">

                                Create
                            </button></div></div></form></div></div> <div id="modal-show-token" tabindex="-1" role="dialog" class="modal fade"><!----></div></div></div> <div><div><div><!----></div> <div id="modal-update-token" tabindex="-1" role="dialog" class="modal fade"><!----></div> <div id="modal-delete-token" tabindex="-1" role="dialog" class="modal fade"><!----></div></div></div></div></div> <div role="tabpanel" id="payment-method" class="tab-pane"><div><div><!----> <div class="panel panel-default"><div class="panel-heading"><div class="pull-left">
                Update Payment Method
            </div> <div class="pull-right"><!----></div> <div class="clearfix"></div></div> <div class="panel-body"><!----> <!----> <form role="form" class="form-horizontal"><div class="form-group"><label for="name" class="col-md-4 control-label">Credit Card</label> <div class="col-md-6"><div id="update-card-card-element" class="form-control StripeElement StripeElement--empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame5" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-46d77db1cd45855c90556b0f3c7fdd99.html#hidePostalCode=true&amp;hideIcon=true&amp;style[base][::placeholder][color]=%23aab7c4&amp;style[base][fontFamily]=%22Open+Sans%22%2C+Helvetica%2C+Arial%2C+sans-serif&amp;style[base][color]=%23495057&amp;style[base][fontSize]=15px&amp;componentName=card&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fspark.laravel.com&amp;referrer=https%3A%2F%2Fspark.laravel.com%2Fsettings&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div></div></div> <div class="form-group"><label for="zip" class="col-md-4 control-label">ZIP / Postal Code</label> <div class="col-md-6"><input type="text" class="form-control"></div></div> <div class="form-group"><div class="col-md-6 col-md-offset-4"><button type="submit" class="btn btn-primary"><span>
                                Update
                            </span></button></div></div></form></div></div> <div><!----></div></div></div></div> <div role="tabpanel" id="invoices" class="tab-pane"><div><div><div class="panel panel-default"><div class="panel-heading">Extra Billing Information</div> <div class="panel-body"><div class="alert alert-info">
                This information will appear on all of your receipts, and is a great place to add your full
                business name, VAT number, or address of record. Do not include any confidential or
                financial information such as credit card numbers.
            </div> <!----> <form role="form" class="form-horizontal"><div class="form-group"><div class="col-md-12"><textarea rows="7" class="form-control" style="font-family: monospace;"></textarea> <span class="help-block" style="display: none;">
                            
                        </span></div></div> <div class="form-group m-b-none"><div class="col-md-offset-4 col-md-8 text-right"><button type="submit" class="btn btn-primary">
                            Update
                        </button></div></div></form></div></div></div> <!----></div></div></div></div>
    </div>
  <!-- /.content-wrapper -->
  @endsection


