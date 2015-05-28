<?php 
session_start();
        $idusuario = 0;
	$usuario = '';	
	$usuarionombre = '';
        $usuarioapellido = '';

	if (isset ($_SESSION['idusuario'])){ 
                $usuarioid = $_SESSION['idusuario'];
		$usuario = $_SESSION['usuario'];
                $usuarionombre = $_SESSION['nombre'];
                $usuarioapellido = $_SESSION['apellido'];
	}
	else {            header('Location:../index.php');        }        
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Intranet - Academica</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="../recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="../recursos/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../recursos/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../recursos/css/style.min.css" rel="stylesheet" type="text/css" />

    <link href="../recursos/css/skin-purple.min.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/sidebar.less.css" rel="stylesheet" type="text/css" />
  </head>
    <body class="skin-purple sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">I.A</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Bienvenido</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
               
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="../recursos/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $usuarionombre.' '.$usuarioapellido;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="../recursos/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $usuarionombre.' '.$usuarioapellido;?>
                        <small>Director</small>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat" id="btnCerrarSesion">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--<li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>-->
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
              <img src="../recursos/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="#"><i class='fa fa-link'></i> <span>Configurar Grupos</span></a></li>-->
            <!--<li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>-->
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Mantenimiento Grupo</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Mantenimiento Grupo</a></li>
                <li><a href="#">Visualizar Grupo</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Mantenimiento Usuario</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Mantenimiento Usuario</a></li>
                <li><a href="#">Visualizar Usuario</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            ASDJASDALSDHJAS
            <small>ASDAS</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
asdaasdkahsdvas 
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Gracias por la visita
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Intranet - Académica</a>.</strong> All rights reserved.
      </footer>
      
      
      
      
      
      
      
      
      <!-- Control Sidebar -->   
      <!--
      <aside class="control-sidebar control-sidebar-dark">                
        <!-- Create the tabs 
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes 
        <div class="tab-content">
          <!-- Home tab content 
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>              
            </ul><!-- /.control-sidebar-menu 

            <h3 class="control-sidebar-heading">Tasks Progress</h3> 
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>               
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>                                    
                </a>
              </li>                         
            </ul><!-- /.control-sidebar-menu          

          </div><!-- /.tab-pane 
          <!-- Stats tab content 
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content 
          <div class="tab-pane" id="control-sidebar-settings-tab">            
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group 
            </form>
          </div><!-- /.tab-pane 
        </div>
      </aside><!-- /.control-sidebar 
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar 
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->
      

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="../recursos/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../recursos/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../recursos/js/app.min.js" type="text/javascript"></script>
    <script src="../recursos/js/logout.js" type="text/javascript"> </script>

  </body>
</html>
