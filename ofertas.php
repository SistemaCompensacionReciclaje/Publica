<?php

  $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
  $username = 'SCR2014';
  $pass = 'SCR2014!';
  $database = 'SCR2014';
  $conexion = mysqli_connect($servername, $username, $pass, $database);

  $sql="SELECT IDOferta, Nombre, Descripcion, Valor, Vigencia, Empresa from Oferta";

  $resultado=mysqli_query($conexion,$sql);

?>





<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>

  <body id="divgris">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <img src="32x32.ico">

      <a class="navbar-brand navbar " href="index.php">SCR</a>

      <div class="navbar-nav-scroll">
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reglas.php">Reglas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">Ofertas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="estaciones.php">Estaciones</a>
        </li>
        
    </ul>
  </div>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link" href="">Iniciar Sesión</a>
        </li>
      </ul>

    </nav>

    <div class="container">
      <div class="row">

        <div class="col-md-1" id="divgris"></div>

        <div class="col-md-10" id="divblanco">
          <br>
          <center><h1>Ofertas del Sistema</h1></center>
          <br>

      <div class="container">
        <div id="divdark" class="main row"> 

          <?php 
            $mostrar=mysqli_fetch_row($resultado);        
          ?>
          <div id="divdark" class="col-md-3">
            <center><h4><?php echo $mostrar[1];  ?></h4></center>
            <center><img src="200x200.png" class="img-responsive"></center>
            <p><?php echo $mostrar[2]; ?></p>
            <h6>Puntos: <?php echo $mostrar[3]; ?></h6>
            <h6>Vigencia: <?php echo $mostrar[4]; ?></h6>
            <br>
          </div>

          <?php 
            $mostrar=mysqli_fetch_row($resultado);        
          ?>
          <div id="divmarino" class="col-md-3">
            <center><h4><?php echo $mostrar[1];  ?></h4></center>
            <center><img src="200x200.png" class="img-responsive"></center>
            <p><?php echo $mostrar[2]; ?></p>
            <h6>Puntos: <?php echo $mostrar[3]; ?></h6>
            <h6>Vigencia: <?php echo $mostrar[4]; ?></h6>
            <br>
          </div>  
          
          <?php 
            $mostrar=mysqli_fetch_row($resultado);        
          ?>
          <div id="divdark" class="col-md-3">
            <center><h4><?php echo $mostrar[1];  ?></h4></center>
            <center><img src="200x200.png" class="img-responsive"></center>
            <p><?php echo $mostrar[2]; ?></p>
            <h6>Puntos: <?php echo $mostrar[3]; ?></h6>
            <h6>Vigencia: <?php echo $mostrar[4]; ?></h6>
            <br>
          </div>  

          <?php 
            $mostrar=mysqli_fetch_row($resultado);        
          ?>
          <div id="divmarino" class="col-md-3">
            <center><h4><?php echo $mostrar[1];  ?></h4></center>
            <center><img src="200x200.png" class="img-responsive"></center>
            <p><?php echo $mostrar[2]; ?></p>
            <h6>Puntos: <?php echo $mostrar[3]; ?></h6>
            <h6>Vigencia: <?php echo $mostrar[4]; ?></h6>
            <br>
          </div>  

    </div>
  </div>


        <br>
        <br>
        <br>
        <br>
        </div>

        <div class="col-md-1" id="divgris"></div>

      </div>
    </div>
    <!-- /#wrapper -->


    <div class="col-md-12 copyright text-center my-auto" id="divdark">
      <br>
          <span>Copyright © SCR 2018</span>
        <br>
        <br>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar Sesión" debajo si desea finalizar la sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-success" href="login.php">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
