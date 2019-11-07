<?php 

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
ini_set('date.timezone', 'America/Mexico_City');
if ($_POST) {
	# code...

	$a  = $_POST['inputProductName'];
	$b  = $_POST['inputActiveProduct'];
	$fecha = date('y/m/d');
	var_dump($_POST);
				
				$sql = "INSERT INTO products (nombre, activo, fecha_edit)
				VALUES ('$a', '$b', '$fecha')";

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