<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema com Laravel </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/Ionicons/css/ionicons.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('select2/dist/css/select2.min.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>


    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

        <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap.css')}}">

    <!-- Google Font -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>PB</b>X</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PBXTOOLS</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="{{ url('/') }}" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegação</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>


                  <!-- Menu Footer-->

                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="{{ url('home') }}">
                <i class="fa fa-laptop"></i>
                <span>PABX IP</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="{{ url('/pabx/ramais') }}"><i class="fa fa-circle-o"></i> Ramais</a></li> -->
                <li><a href="{{ url('/pabx/chamadas') }}"><i class="fa fa-circle-o"></i> Chamadas</a></li>
                <li><a href="{{ url('/pabx/abandonadas') }}"><i class="fa fa-circle-o"></i> Abandonadas</a></li>
                <li><a href="{{ url('/pabx/mramais') }}"><i class="fa fa-circle-o"></i> Monitoramento de Ramais</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>CallCenter</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('callcenter/agent') }}"><i class="fa fa-circle-o"></i> Agent</a></li>
                <li><a href="{{ url('callcenter/pausas') }}"><i class="fa fa-circle-o"></i> Pausas</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-pdf-o"></i>
                <span>Relatorios</span>
                <small class="label pull-right bg-red">PDF</small>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('chamadas/report_all') }}"><i class="fa fa-circle-o"></i> Chamadas</a></li>
                <li><a href="{{ url('chamadas/report_agent') }}"><i class="fa fa-circle-o"></i>Chamadas Agent</a></li>
                <li><a href="{{ url('chamadas/report_pausa') }}"><i class="fa fa-circle-o"></i>Pausas Acumuladas</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Login</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('register') }}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li>@if (Route::has('register')) <a href="{{ route('register') }}"> <i class="fa fa-circle-o"></i> Register</a> @endif
                  </li>

              </ul>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Sobre...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">PBXTOOLS - Fortalnet</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>


                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Conteudo-->
                              @yield('conteudo')
                              <!--Fim Conteudo-->
                           </div>
                        </div>

                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versão</b> 1.1.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.ineedsolutions.com.br">I Need Solutions</a>.</strong> Todos os direitos reservados.
      </footer>


      <!-- data -->
      <script src="{{asset('plugins/Date/jquery.min.js')}}"></script>
      <script src="{{asset('plugins/Date/bootstrap-datepicker.js')}}"></script>

    <!-- jQuery 3.1.4 -->
    <!-- <script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script> -->
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/adminlte.min.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('select2/dist/js/select2.full.min.js')}}">
    <!-- InputMask -->
    <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- date-range-picker -->
    <link rel="stylesheet" href="{{asset('moment/min/moment.min.js')}}">
    <!-- <link rel="stylesheet" href="{{asset('bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"> -->
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}">
    <!-- bootstrap color picker -->
    <link rel="stylesheet" href="{{asset('bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}">
    <!-- bootstrap time picker -->
    <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>


    <script src="{{asset('plugins/chart.js/Chart.js')}}"></script>

    <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>



    <link rel="stylesheet" href="{{asset('bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">







    


  </body>
</html>
