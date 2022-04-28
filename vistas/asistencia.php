<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CC | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../admin/public/css/blue.css">
    <link rel="shortcut icon" href="../admin/public/img/favicon.ico">

  </head>
<body class="hold-transition lockscreen">

<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
<?php 
 //include '../ajax/asistencia.php' ?>
    <div name="movimientos" id="movimientos">
    </div> 


 <!-- Texto H1 PAGINA  -->
  <div class="lockscreen-logo">
  <H1> <a href="#"><b>CFCRL CONTROL DE ASISTENCIA </b> </a> </H1>

    
  </div>
  <!-- User name -->
  <div class="lockscreen-name">ASISTENCIA</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- IMAGEN PRINICIPAL CIRCULO-->
    <div class="lockscreen-image">
      <img src="../admin/files/negocio/cfcrl.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form  action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
      <div class="input-group">
        <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">

        <div class="input-group-btn">
          <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Ingresa tu ID de asistencia
  </div>
  <div class="text-center">

  <!-- /.INICIAR SESION  PAGINA PRINCIPAL -->
  </div>
  <div class="lockscreen-footer text-center">
  <H4> <a href="../admin/"style="color:9B26D5;"> *****INICIAR SESIÓN *****</a>   </H4>
  </div>
</div>



<!-- /.center -->


    <!-- jQuery -->
    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../admin/public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/asistencia.js"></script>


  </body>
</html> 
