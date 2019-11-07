<?php include_once ('../actions/core.php');?>
<?php include ('../bots/bot-security-seconds.php'); ?>
<?php if($_SESSION['cargo'] == 9){}else{header('Location: ../index.php');}?>
<?php include_once ('../views/menus/menu-nav-second.php'); ?>  
<?php include_once ('../views/modals/modal-report-export.php'); ?>
<?php include ('../views/modals/modal-logout.php'); ?>    
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.2/fonts/glyphicons-halflings-regular.woff2">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  

</head>

<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <IMG class="logo" src="../img/crm-logo.svg" style="width: 10%; margin-left: 10px;">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars" style="margin-left: 25px;"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      <a class="navbar-brand mr-1" href="../index.php">Bienvenido Sr(a) <?php echo $_SESSION['inputUserLogin'];?></a>
      <div class="input-group-append"> >
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <?php echo $navBar; ?>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
  <?php if ($_SESSION['cargo'] == 1) {
			          			# code...
          echo  $menuAgenteITO;
       }else{}
        if ($_SESSION['cargo'] == 2) {
         # code...
         echo  $menuSupervisorITO;
        }else{}
          if ($_SESSION['cargo'] == 3) {
          # code...
          echo  $menuVerificadorITO;
        }else{}
          if ($_SESSION['cargo'] == 4) {
          # code...
          echo  $menuValidadorITO;
        }else{}
          if ($_SESSION['cargo'] == 5) {
          # code...
           
        }else{}
          if ($_SESSION['cargo'] == 6) {
          # code...
          
        }else{}
          if ($_SESSION['cargo'] == 7) {
          # code...
          echo  $menuErrITO;
        }else{}
          if ($_SESSION['cargo'] == 8) {
          # code...
          echo  $menuGerenteITO;
        }else{}
          if ($_SESSION['cargo'] == 9) {
          # code...
          echo  $menuAdministradorITO;
        }
           
?>      

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>


<div id="content-wrapper">

<div class="container-fluid">

<?php
			// id = id			
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($connect,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($connect, "SELECT * FROM products WHERE id='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($connect, "DELETE FROM products WHERE id='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header"><i class="fas fa-table"></i> Base de datos de usuarios</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
                    <th>No</th>
					          <th>Producto</th>
					          <th>Activo?</th>
                    <th>F. Creado</th>
                    <th>F. Modificado</th>
                    <th>Acciones</th>
				</tr>
          </thead>
          <tbody>
              <?php 
  $sql= "SELECT * FROM products ORDER BY id ASC";
  $result=mysqli_query($mysqli,$sql);

while($row=mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['nombre'] ?></td>
<td><?php echo $row['activo'] ?></td>
<td><?php echo $row['fecha_create'] ?></td>
<td><?php echo $row['fecha_edit']?></td>
<td>

							<?php	echo '<a href="../actions/action-edit-products.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>' ?>
							<?php echo '<a href="index-table-products.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>' ?>
</td>
</tr>
<?php 
}
?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Ultima actualización <?php $fecha = date('d/m/Y'); echo $fecha;?></div>
  </div>

  
</div>


</div>

<!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php echo $modalLogoutITO; ?>
  <!-- Report Modal-->
  <?php
  if ($_SESSION['cargo'] == 9) {
          # code...
          echo  $modalReportITO;
        }
           
?> 

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>