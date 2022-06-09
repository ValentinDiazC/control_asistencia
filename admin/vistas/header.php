 <?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
 <!DOCTYPE html>
<html>
  <!--PAGINA PRINCIPAL DESPUES DEL ACCESO-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>CONTROL DE ASISTENCIA CFCRL </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="280144326139427"
  theme_color="#0084ff"
  logged_in_greeting="Hola! deseas compartir algún sistema o descargar ?"
  logged_out_greeting="Hola! deseas compartir algún sistema o descargar ?">
</div>
<div class="wrapper">
 

  <header class="main-header">
    <!-- Logo -->
    <a href="escritorio.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CC</b> A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ASISTENCIA</b></span>

      <!--  <strong><h3><center><p style="color:#E6E0D4";>  CONTROL DE ASISTENCIA DEL CENTRO FEDERAL DE CONCILIACIÓN Y REGISTRO LABORAL</p></center></h3></strong>  -->

      
    </a>
 
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
         <!-- SE AGREGA LOGO DEL CFCRL-->
         <div class="pull-left image">
         <!-- <img src="../files/usuarios/cfcrl1.png" class="img-square" style="width: 90px; height: 90px;"> -->


         <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-square" style="width: 90px; height: 90px;" alt="User Image">
        <!-- <img style="border: 1px solid; color: black;" src="URL" alt="" width="300" height="300" /> -->
        
        
        </div>
          <!-- texto de control de asistencia del CFCRL-->
         
    <strong><h3><center><p style="color:#E6E0D4";>  CONTROL DE ASISTENCIA DEL CENTRO FEDERAL DE CONCILIACIÓN Y REGISTRO LABORAL</p></center></h3></strong> 
   
    

     </a>
   
    
    



      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>

           

          </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nombre'].' '.$_SESSION['departamento']; ?>
                  <small>Control de Asistencia CFCRL</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Salir</a>
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
      <!-- Sidebar user panel -->
<div class="user-panel">
        <div class="pull-left image">
          <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" style="width: 50px; height: 50px;" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MENÚ DE NAVEGACIÓN</li>


      <li><a href="escritorio.php"><i class="fa fa-home"></i> <span>Escritorio</span></a></li>

<!--
      <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mensaje.php"><i class="fa fa-circle-o"></i> Mensaje</a></li>
          </ul>
      </li>

-->
<?php if ($_SESSION['tipousuario']=='Administrador') {
?>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Acceso</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuario.php"><i class="fa fa-user"></i> Usuarios</a></li>
            <li><a href="tipousuario.php"><i class="fa fa-users"></i> Tipo Usuario</a></li>
            <!-- <li><a href="departamento.php"><i class="fa fa-sitemap"></i> Departamento</a></li> -->
          </ul>
      </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Departamento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="departamento.php"><i class="fa fa-sitemap"></i> Departamento</a></li>            
          </ul>
      </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Asistencias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="asistencia.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
            <li><a href="rptasistencia.php"><i class="fa fa-circle-o"></i> Reportes</a></li>
           
          </ul>
      </li>
<?php } ?>
<?php if ($_SESSION['tipousuario']!='Administrador') {
?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Mis Asistencias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="asistenciau.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
            <li><a href="rptasistenciau.php"><i class="fa fa-circle-o"></i> Reportes</a></li>
           
          </ul>
      </li>
<?php } ?>
     <!-- NECESITAS AYUDA -->
      <li><a href="#"><i class="fa fa-question-circle"></i> <span> </span><small class="label pull-right bg-red"> Necesitas ayuda? <br>Envia un correo a: </small></a></li>

      
<!-- CORREO DE MESA DE SERVICIO -->
      <li><a href="#"></i> <span> </span><small class="label pull-right bg-green"> mesadeservicio@centrolaboral.gob.mx</small></a></li>

     <!-- ENLACE A PAGINA DE CFCRL -->
      <li><a href="https://centrolaboral.gob.mx/"><i class="fa  fa-exclamation-circle"></i> <span>CFCRL</span><small class="label pull-right bg-yellow">CFCRL</small></a></li>   
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>