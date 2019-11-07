<?php 

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
ini_set('date.timezone', 'America/Mexico_City');
if ($_POST) {
	# code...

	$a  = $_POST['inputAgentName'];
	$b  = $_POST['inputNameClient'];
	$c  = $_POST['inputLastnameClient'];	
	$d  = $_POST['inputPhoneClient'];
	$e  = $_POST['inputPhoneAltClient'];
	$f  = $_POST['inputGenClient'];
	$g  = $_POST['inputAgeClient'];
	$h  = $_POST['inputDirClient'];
	$i  = $_POST['inputZipClient'];
	$j  = $_POST['inputZip4Client'];
	$k  = $_POST['inputCityClient'];
	$l  = $_POST['inputStateClient'];
	$m  = $_POST['inputPaymentMoneyOrder'];
	$p  = $_POST['inputCardClient'];
	$q  = $_POST['inputNameCardClient'];
	$r  = $_POST['inputDateExpCardClient'];
	$s  = $_POST['inputCvcCardClient'];
	$t  = $_POST['inputPriceClient'];
	$u  = $_POST['inputReOrder'];
	$v  = $_POST['inputNoteAgent'];
	$w  = $_POST['inputProduct1Client'];
	$x  = $_POST['inputQty1Client'];
	$y  = $_POST['inputProduct2Client'];
	$z  = $_POST['inputQty2Client'];
	$aa  = $_POST['inputProduct3Client'];
	$ab  = $_POST['inputQty3Client'];
	$ac  = $_POST['inputProduct4Client'];
	$ad  = $_POST['inputQty4Client'];
	$ae  = $_POST['inputProduct5Client'];
	$af  = $_POST['inputQty5Client'];
	die();
	var_dump($_POST);
	$status = "Cargada";
	$fecha = date('y/m/d');
					
				$sql = "INSERT INTO sales (agent,	name_client,	lastname_client, tratamiento1,	qty1,	tratamiento2,	qty2,	tratamiento3,	qty3,	tratamiento4,	qty4,	tratamiento5,	qty5, status,  fecha_add)
				VALUES ('$a', '$b', '$c', '$w', '$x', '$y', '$z', '$aa', '$ab', '$ac', '$ad', '$ae', '$af', '$status', '$fecha')";

				if($connect->query($sql) === true) {
					$valid['success'] = true;
					$valid['messages'] = "Orden creada exitosamente!, puedes validar su evolución en el apartado de Ventas-Mis ventas del menu principal.";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error no se ha podido cargar la orden, intentelo de nuevo. En caso de que este error persista, pongase en contacto con el administrador del sistema.";
				}
		

	$connect->close();

	echo json_encode($valid);
	header('Location: ../index.php');
 
}
?>