<?php include ('./actions/core.php'); ?>
<?php include ('./bots/bot-security.php'); ?>
<?php include ('./bots/bot-count-sales-status.php'); ?>
<?php include ('./views/menus/menu-nav.php'); ?>  
<?php include ('./views/modals/modal-report-export.php'); ?>
<?php include ('./views/modals/modal-logout.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <IMG class="logo" src="img/crm-logo.svg" style="width: 10%; margin-left: 10px;">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars" style="margin-left: 25px;"></i>
    </button>
    

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      <a class="navbar-brand mr-1" href="index.php">Bienvenido Sr(a) <?php echo $_SESSION['inputUserLogin'];?></a>
      <div class="input-group-append"> >
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
           <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-key"></i> Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->    
       <?php if ($_SESSION['cargo'] == 1) {
			          			# code...
          echo  $menuAgente;
       }else{}
        if ($_SESSION['cargo'] == 2) {
         # code...
         echo  $menuSupervisor;
        }else{}
          if ($_SESSION['cargo'] == 3) {
          # code...
          echo  $menuVerificador;
        }else{}
          if ($_SESSION['cargo'] == 4) {
          # code...
          echo  $menuValidador;
        }else{}
          if ($_SESSION['cargo'] == 5) {
          # code...           
        }else{}
          if ($_SESSION['cargo'] == 6) {
          # code...          
        }else{}
          if ($_SESSION['cargo'] == 7) {
          # code...
          echo  $menuErr;
        }else{}
          if ($_SESSION['cargo'] == 8) {
          # code...
          echo  $menuGerente;
        }else{}
          if ($_SESSION['cargo'] == 9) {
          # code...
          echo  $menuAdministrador;
        }           
?>      

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <?php
        if ($_SESSION['cargo'] >= 8) {
			          			# code...
			          			echo '
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Ventas cargadas: ';}?> <?php if ($_SESSION['cargo'] >= 8) {echo $countSalesUp;} ?><?php if ($_SESSION['cargo'] >= 8) {
                  # code...
                  echo '</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Mas detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>';}?><?php
          if ($_SESSION['cargo'] >= 8) {
                        # code...
                        echo '
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Ventas verificadas: ';}?> <?php if ($_SESSION['cargo'] >= 8) {echo $countSalesVer;}?><?php if ($_SESSION['cargo'] >= 8) {
                  # code...
                  echo '</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Mas detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>';}?><?php
          if ($_SESSION['cargo'] >= 8) {
                        # code...
                        echo '
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Ventas validadas: ';}?> <?php if ($_SESSION['cargo'] >= 8) {echo $countSalesVal;}?><?php if ($_SESSION['cargo'] >= 8) {
                  # code...
                  echo '</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Mas detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>' ;}?><?php
          if ($_SESSION['cargo'] >= 8) {
                        # code...
                        echo '
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Ventas canceladas: ';}?> <?php if ($_SESSION['cargo'] >= 8) {echo $countSalesCancel;}?><?php if ($_SESSION['cargo'] >= 8) {
                  # code...
                  echo '</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Mas detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>';}?>

        
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Area de Grafico -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php echo  $modalLogout; ?>

  <!-- Reporte Modal-->
  <?php
if ($_SESSION['cargo'] == 9) {
  # code...
  echo  $modalReport;
}   
  ?>
  
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

</body>

</html>