<?php 

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
ini_set('date.timezone', 'America/Caracas');
if ($_POST) {
	# code...

	$a  = $_POST['inputUserName'];
	$b  = $_POST['inputUserPass'];
	$c  = $_POST['inputNameUser'];
	$d  = $_POST['inputLastnameUser'];
	$e  = $_POST['inputCargo'];
	$f  = $_POST['inputActiveUser'];
	$username = $_SESSION['inputUserLogin'];
	$fecha = date('y/m/d');
					
				$sql = "INSERT INTO user (username, password, nombre, apellido, rol, activo, add_for, fecha_create)
				VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$username', '$fecha')";

				if($connect->query($sql) === true) {
					$valid['success'] = true;
					$valid['messages'] = "Creado exitosamente";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error no se ha podido guardar";
				}
		

	$connect->close();

	echo json_encode($valid);
	header('Location: ../index.php');
 
} 
?>