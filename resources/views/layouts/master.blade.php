<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstap.min.css"/>
    {!! Charts::assets()!!}

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    {!! Charts::styles() !!}

    @yield('stylesheets')
</head>
    <body class="hold-transition skin-blue sidebar-mini">
            <div class="wrapper">
            
              <!-- Main Header -->
              <header class="main-header">
            
                <!-- Logo -->
              <a href="{{url('')}}" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class="logo-mini"><b>REF</b>KE</span>
                  <!-- logo for regular state and mobile devices -->
                  <span class="logo-lg"><b>Admin</b></span>
                </a>
            
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                  <!-- Sidebar toggle button-->
                  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                       
                  <!-- Navbar Right Menu -->
                  <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                      <!-- User Account Menu -->
                      <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <!-- The user image in the navbar-->
                          <img src="{{asset('img/avatar5.png')}}" class="user-image" alt="User Image">
                          <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class="hidden-xs">Admin </span>
                        </a>
                        <ul class="dropdown-menu">
                          <!-- The user image in the menu -->
                          <li class="user-header">
                            <img src="{{asset('img/avatar5.png')}}" class="img-circle" alt="User Image">
                          </li>
                          <!-- Menu Body -->
                          <li class="user-body">
                            <div class="row">
                              <div class="col-xs-4 text-center">
                                <a href="#">Settings</a>
                              </div>
                            </div>
                            <!-- /.row -->
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" 
                                         class="btn btn-default btn-flat">Sign out</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <!-- Control Sidebar Toggle Button -->
                    </ul>
                  </div>
                </nav>
              </header>
              <!-- Left side column. contains the logo and sidebar -->
              <aside class="main-sidebar">
            
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
            
                  <!-- Sidebar user panel (optional) -->
                  <div class="user-panel">
                    <div class="pull-left image">
                      <img src="{{asset('img/avatar5.png')}}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                      <!-- Status -->
                      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                  </div>
            
                  <!-- search form (Optional) -->
                  <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                      <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                          </button>
                        </span>
                    </div>
                  </form>
                  <!-- /.search form -->
            
                  <!-- Sidebar Menu -->
                  <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">HEADER</li>
                    <!-- Optionally, you can add icons to the links -->
                  <li class="active"><a href="{{url('home')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-link"></i> <span>Tables</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                      <ul class="treeview-menu">
                      <li><a href="{{url('refugees')}}">Refugees</a></li>
                      <li><a href="{{url('jobs')}}">Jobs</a></li>
                      <li><a href="{{url('camp')}}">Camps</a></li>
                      <li><a href="{{url('country')}}">Country</a></li>
                      <li><a href="{{url('repatriation')}}">Repatriation</a></li>
                      <li><a href="{{url('skills')}}">Skills</a></li>

                      </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Reports</span>
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{url('allocation')}}">Job Placements</a></li>
                          <li><a href="#">Allocations</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Charts</span>
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                        <li><a href="{{('charts')}}">Refugee Data</a></li>
                        <li><a href="{{('groups')}}">Affected Countries</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Forms</span>
                          <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="#">Link in level 2</a></li>
                          <li><a href="#">Link in level 2</a></li>
                        </ul>
                      </li>
                  </ul>
                  <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
              </aside>
            
              <!-- Content Wrapper. Contains page con tent -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                </section>
            
                <!-- Main content -->
                <section class="content container-fluid">
                  @yield('content')
                 
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->            
              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                  <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Home tab content -->
                  <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                      <li>
                        <a href="javascript:;">
                          <i class="menu-icon fa fa-birthday-cake bg-red"></i>
            
                          <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
            
                            <p>Will be 23 on April 24th</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
            
                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                      <li>
                        <a href="javascript:;">
                          <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="pull-right-container">
                                <span class="label label-danger pull-right">70%</span>
                              </span>
                          </h4>
            
                          <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
            
                  </div>
                  <!-- /.tab-pane -->
                  <!-- Stats tab content -->
                  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                  <!-- /.tab-pane -->
                  <!-- Settings tab content -->
                  <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                      <h3 class="control-sidebar-heading">General Settings</h3>
            
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Report panel usage
                          <input type="checkbox" class="pull-right" checked>
                        </label>
            
                        <p>
                          Some information about this general settings option
                        </p>
                      </div>
                      <!-- /.form-group -->
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
              </aside>
              <!-- /.control-sidebar -->
              <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>         
    <script src="{{ asset('js/app.js') }}"></script>   
    <script>
        $('#edit-modal').on('show.bs.modal', function (event){

            var button = $(event.relatedTarget)
            var title = button.data('mytitle')
            var description = button.data('mydescription')
            var qualifications = button.data('myqualifications')
            var id = button.data('myid')
            var modal = $(this)

            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #description').val(description);
            modal.find('.modal-body #qualifications').val(qualifications);
            modal.find('.modal-body #id').val(id);


        })


        // delete modal
        $('#modal-danger').on('show.bs.modal', function (event){

        var button = $(event.relatedTarget)
        var id = button.data('myid')
        var modal = $(this)

        
        modal.find('.modal-body #id').val(id);


    })


   

    </script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </body>
</html>