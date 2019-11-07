<?php 
session_start();

$errors = array();

if (isset($_POST['inputUserLogin']) and isset($_POST['inputPasswordLogin'])) {
	var_dump($_POST);
	# code...
	include('db-connect.php');
	$usuario = mysqli_real_escape_string($connect,$_POST['inputUserLogin']);
	$contrasena = mysqli_real_escape_string($connect,$_POST['inputPasswordLogin']);

	$query = 'SELECT * FROM user WHERE username="'.$usuario.'" ';	
	$res = $connect->query($query);

	if ($row = mysqli_fetch_array($res)) {
		# code...
		if ($row["password"] == $contrasena) {
			# code...
			$_SESSION["inputUserLogin"] = $row['username'];
			$_SESSION["inputPasswordLogin"] = $row['password'];
			$_SESSION["name"]= $row['nombre'];
			$_SESSION["apellido"]= $row['apellido'];
			$_SESSION["cargo"]= $row['rol'];
			$_SESSION["activo"]= $row['activo'];
			$_SESSION["id_user"]=$row['id'];
			$_SESSION["fecha"]=$row['fecha'];

			header('Location: ../index.php');
		}else{

			echo "<script  languaje=’javascript’>alert('LA CONTRASENA NO ES CORRECTA');window.location='../login.php'</script>";

		}

	}else{
		echo "<script  languaje=’javascript’>alert('EL NOMBRE DE USUARIO NO ES CORRECTO');window.location='../login.php'</script>";
	}
	mysqli_free_result($res);

}else{
	header('Location: ../login.php');
}



mysqli_close($connect);

?>
