<?php
include ("core.php");
include ("../views/menus/menu-change-nav.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de la orden</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="../css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php echo $ordenesDelivNav;?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de la orden &raquo; Editar datos</h2>
			<hr />
			
			<?php
			
			ini_set('date.timezone', 'America/Caracas');
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($connect,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($connect, "SELECT * FROM sales WHERE id='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: ./views/index-table-order-pent-deliv.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['deliver'])){
				$agente	 			= mysqli_real_escape_string($connect,(strip_tags($_POST["agente"],ENT_QUOTES)));//Escanpando caracteres 
				$nameClient		 	= mysqli_real_escape_string($connect,(strip_tags($_POST["nameClient"],ENT_QUOTES)));//Escanpando caracteres 
				$lastNameClient	 	= mysqli_real_escape_string($connect,(strip_tags($_POST["lastNameClient"],ENT_QUOTES)));//Escanpando caracteres 
				$phone		 		= mysqli_real_escape_string($connect,(strip_tags($_POST["phoneClient"],ENT_QUOTES)));//Escanpando caracteres 
				$phoneAlt	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["phoneAltClient"],ENT_QUOTES)));//Escanpando caracteres 
				$genClient	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["genderClient"],ENT_QUOTES)));//Escanpando caracteres 
				$ageClient	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["ageClient"],ENT_QUOTES)));//Escanpando caracteres 
				$direccion	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["dirClient"],ENT_QUOTES)));//Escanpando caracteres 
				$zipcode	    	= mysqli_real_escape_string($connect,(strip_tags($_POST["zipcodeClient"],ENT_QUOTES)));//Escanpando caracteres 
				$zipfour	   		= mysqli_real_escape_string($connect,(strip_tags($_POST["zip4Client"],ENT_QUOTES)));//Escanpando caracteres 
				$city	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["cityClient"],ENT_QUOTES)));//Escanpando caracteres 
				$state	    		= mysqli_real_escape_string($connect,(strip_tags($_POST["stateClient"],ENT_QUOTES)));//Escanpando caracteres 
				$payment	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["paymentTypeClient"],ENT_QUOTES)));//Escanpando caracteres 
				$cardProcessClient	= mysqli_real_escape_string($connect,(strip_tags($_POST["cardProcessClient"],ENT_QUOTES)));//Escanpando caracteres 
				$cardClient	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["cardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$nameCardClient	    = mysqli_real_escape_string($connect,(strip_tags($_POST["nameCardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$dateExpCardClient	= mysqli_real_escape_string($connect,(strip_tags($_POST["expCardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$cvcCardClient	    = mysqli_real_escape_string($connect,(strip_tags($_POST["cvcCardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$price	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["priceClient"],ENT_QUOTES)));//Escanpando caracteres 
				$reOrder	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["reOrderClient"],ENT_QUOTES)));//Escanpando caracteres 
				$productOne	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["product1"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyOne	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["qty1"],ENT_QUOTES)));//Escanpando caracteres 
				$productTwo	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["product2"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyTwo	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["qty2"],ENT_QUOTES)));//Escanpando caracteres 
				$productThree	    = mysqli_real_escape_string($connect,(strip_tags($_POST["product3"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyThree	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["qty3"],ENT_QUOTES)));//Escanpando caracteres 
				$productFour	    = mysqli_real_escape_string($connect,(strip_tags($_POST["product4"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyFour	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["qty4"],ENT_QUOTES)));//Escanpando caracteres 
				$productFive	    = mysqli_real_escape_string($connect,(strip_tags($_POST["product5"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyFive	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["qty5"],ENT_QUOTES)));//Escanpando caracteres 
				$noteDeliv	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["noteDeliv"],ENT_QUOTES)));//Escanpando caracteres 
				$noteDelivcoment	= mysqli_real_escape_string($connect,(strip_tags($_POST["noteDelivcoment"],ENT_QUOTES)));//Escanpando caracteres 
				$fechaEdit	     	= date('y/m/d');
				$fechaEditcoment	= date('y/m/d h:m:s');
				$coment 			= "(".$fechaEditcoment." -- ".$_SESSION['inputUserLogin'].") // ".$noteDeliv." /--------------------------/ ".$noteDelivcoment;
				$status				= "Entregada";

				$update = mysqli_query($connect, "UPDATE sales SET agent='$agente', name_client='$nameClient', name_client='$nameClient', lastname_client='$lastNameClient', phone='$phone', phone_alt='$phoneAlt', gender='$genClient', age='$ageClient', address='$direccion', zip_code='$zipcode', zip_4='$zipfour', city='$city', state='$state', payment_type='$payment', procesadora='$cardProcessClient', card='$cardClient', name_card='$nameCardClient', date_exp_card='$dateExpCardClient', cvc_card='$cvcCardClient', price='$price', re_order='$reOrder', note_agent='$noteAgent', product1='$productOne',  qty1='$qtyOne', product2='$productTwo', qty2='$qtyTwo', product3='$productThree', qty3='$qtyThree', product4='$productFour', qty4='$qtyFour', product5='$productFive', qty5='$qtyFive', fecha_edit='$fechaEdit', fecha_deliv='$fechaEdit', note_deliv='$coment', status='$status' WHERE id='$nik'") or die(mysqli_error());
				if($update){
					header("Location: action-edit-order-deliv.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			if(isset($_POST['modificate'])){
				$agente	 			= mysqli_real_escape_string($connect,(strip_tags($_POST["agente"],ENT_QUOTES)));//Escanpando caracteres 
				$nameClient		 	= mysqli_real_escape_string($connect,(strip_tags($_POST["nameClient"],ENT_QUOTES)));//Escanpando caracteres 
				$lastNameClient	 	= mysqli_real_escape_string($connect,(strip_tags($_POST["lastNameClient"],ENT_QUOTES)));//Escanpando caracteres 
				$phone		 		= mysqli_real_escape_string($connect,(strip_tags($_POST["phoneClient"],ENT_QUOTES)));//Escanpando caracteres 
				$phoneAlt	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["phoneAltClient"],ENT_QUOTES)));//Escanpando caracteres 
				$genClient	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["genderClient"],ENT_QUOTES)));//Escanpando caracteres 
				$ageClient	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["ageClient"],ENT_QUOTES)));//Escanpando caracteres 
				$direccion	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["dirClient"],ENT_QUOTES)));//Escanpando caracteres 
				$zipcode	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["zipcodeClient"],ENT_QUOTES)));//Escanpando caracteres 
				$zipfour	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["zip4Client"],ENT_QUOTES)));//Escanpando caracteres 
				$city	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["cityClient"],ENT_QUOTES)));//Escanpando caracteres 
				$state	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["stateClient"],ENT_QUOTES)));//Escanpando caracteres 
				$payment	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["paymentTypeClient"],ENT_QUOTES)));//Escanpando caracteres 
				$cardProcessClient	= mysqli_real_escape_string($connect,(strip_tags($_POST["cardProcessClient"],ENT_QUOTES)));//Escanpando caracteres 
				$cardClient	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["cardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$nameCardClient	    = mysqli_real_escape_string($connect,(strip_tags($_POST["nameCardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$dateExpCardClient	= mysqli_real_escape_string($connect,(strip_tags($_POST["expCardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$cvcCardClient	    = mysqli_real_escape_string($connect,(strip_tags($_POST["cvcCardClient"],ENT_QUOTES)));//Escanpando caracteres 
				$price	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["priceClient"],ENT_QUOTES)));//Escanpando caracteres 
				$reOrder	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["reOrderClient"],ENT_QUOTES)));//Escanpando caracteres 
				$productOne	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["product1"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyOne	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["qty1"],ENT_QUOTES)));//Escanpando caracteres 
				$productTwo	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["product2"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyTwo	     		= mysqli_real_escape_string($connect,(strip_tags($_POST["qty2"],ENT_QUOTES)));//Escanpando caracteres 
				$productThree	    = mysqli_real_escape_string($connect,(strip_tags($_POST["product3"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyThree	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["qty3"],ENT_QUOTES)));//Escanpando caracteres 
				$productFour	    = mysqli_real_escape_string($connect,(strip_tags($_POST["product4"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyFour	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["qty4"],ENT_QUOTES)));//Escanpando caracteres 
				$productFive	    = mysqli_real_escape_string($connect,(strip_tags($_POST["product5"],ENT_QUOTES)));//Escanpando caracteres 
				$qtyFive	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["qty5"],ENT_QUOTES)));//Escanpando caracteres 
				$noteShipp	     	= mysqli_real_escape_string($connect,(strip_tags($_POST["noteShipp"],ENT_QUOTES)));//Escanpando caracteres 
				$noteShippcoment	= mysqli_real_escape_string($connect,(strip_tags($_POST["noteShippcoment"],ENT_QUOTES)));//Escanpando caracteres 
				$fechaEdit	     	= date('y/m/d');
				$fechaEditcoment	= date('y/m/d h:m:s');
				$coment 			= "(".$fechaEditcoment." -- ".$_SESSION['inputUserLogin'].") // ".$noteShipp." /--------------------------/ ".$noteShippcoment;
				
				$update = mysqli_query($connect, "UPDATE sales SET agent='$agente', name_client='$nameClient', name_client='$nameClient', lastname_client='$lastNameClient', phone='$phone', phone_alt='$phoneAlt', gender='$genClient', age='$ageClient', address='$direccion', zip_code='$zipcode', zip_4='$zipfour', city='$city', state='$state', payment_type='$payment', procesadora='$cardProcessClient', card='$cardClient', name_card='$nameCardClient', date_exp_card='$dateExpCardClient', cvc_card='$cvcCardClient', price='$price', re_order='$reOrder', note_agent='$noteAgent', product1='$productOne',  qty1='$qtyOne', product2='$productTwo', qty2='$qtyTwo', product3='$productThree', qty3='$qtyThree', product4='$productFour', qty4='$qtyFour', product5='$productFive', qty5='$qtyFive', fecha_edit='$fechaEdit', note_shipp='$coment' WHERE id='$nik'") or die(mysqli_error());
				if($update){
					header("Location: action-edit-order-deliv.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}					
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label"># de Orden</label>
					<div class="col-sm-2">
						<input type="text" name="ID" value="<?php echo $row ['id']; ?>" class="form-control" placeholder="# de Orden" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Agente</label>
					<div class="col-sm-4">
						<input type="text" name="agente" value="<?php echo $row ['agent']; ?>" class="form-control" placeholder="agente" readonly="readonly">
					</div>
				</div>
				<hr />
				<strong><h4 style="text-align: center; background: black; color: white;">Datos del cliente</h4></strong>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" maxlength="50" name="nameClient" value="<?php echo $row ['name_client']; ?>" class="form-control" placeholder="Nombre" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido</label>
					<div class="col-sm-4">
						<input type="text" maxlength="50" name="lastNameClient" value="<?php echo $row ['lastname_client']; ?>" class="form-control" placeholder="Apellido" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono Ppal.</label>
					<div class="col-sm-4">
						<input type="text" maxlength="10" name="phoneClient" value="<?php echo $row ['phone']; ?>" class="form-control" placeholder="Telefono Ppal." readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono Alt.</label>
					<div class="col-sm-4">
						<input type="text" maxlength="10" name="phoneAltClient" value="<?php echo $row ['phone_alt']; ?>" class="form-control" placeholder="Telefono Alt.">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Genero</label>
					<div class="col-sm-4">
						<input type="text" name="genderClient" value="<?php echo $row ['gender']; ?>" class="form-control" placeholder="Genero" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Edad</label>
					<div class="col-sm-4">
						<input type="text" name="ageClient" value="<?php echo $row ['age']; ?>" class="form-control" placeholder="Sexo del cliente" readonly="readonly">
					</div>
				</div>
				<hr />
				<strong><h4 style="text-align: center; background: black; color: white;">Datos del envio</h4></strong>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-4">
						<input type="text" name="dirClient" value="<?php echo $row ['address']; ?>" class="form-control" placeholder="Dirección" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Zipcode</label>
					<div class="col-sm-4">
						<input type="text" maxlength="5" name="zipcodeClient" value="<?php echo $row ['zip_code']; ?>" class="form-control" placeholder="Zipcode" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Zip4</label>
					<div class="col-sm-4">
						<input type="text" maxlength="4" name="zip4Client" value="<?php echo $row ['zip_4']; ?>" class="form-control" placeholder="Zip4" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Ciudad</label>
					<div class="col-sm-4">
						<input type="text" name="cityClient" value="<?php echo $row ['city']; ?>" class="form-control" placeholder="Ciudad" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-4">
						<input type="text" name="stateClient" value="<?php echo $row ['state']; ?>" class="form-control" placeholder="Estado" readonly="readonly">
					</div>
				</div>
				<hr />
				<strong><h4 style="text-align: center; background: black; color: white;">Datos de pago</h4></strong>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de pago</label>
					<div class="col-sm-4">
						<input type="text" name="paymentTypeClient" value="<?php echo $row ['payment_type']; ?>" class="form-control" placeholder="Pago Money Order" required="required">
					</div>
				</div>
				<?php if ($row ['payment_type']=="Tarjeta") {
					echo '
					<div class="form-group">
					<label class="col-sm-3 control-label">Procesadora de tarjeta</label>
					<div class="col-sm-4">
						<input type="text" name="cardProcessClient" value="'.$row ['procesadora'].'" class="form-control" placeholder="Procesadora de tarjeta" required="required">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Numero de tarjeta</label>
					<div class="col-sm-4">
						<input type="text" name="cardClient" value="'.$row ['card'].'" class="form-control" placeholder="Numero de tarjeta" required="required">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre del titular</label>
					<div class="col-sm-4">
						<input type="text" name="nameCardClient" value="'.$row ['name_card'].'" class="form-control" placeholder="Nombre del titular" required="required">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de vencimiento</label>
					<div class="col-sm-4">
						<input type="date" name="expCardClient" value="'.$row ['date_exp_card'].'" class="form-control" placeholder="Fecha de vencimiento" required="required">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">CVC</label>
					<div class="col-sm-4">
						<input type="text" maxlength="3" name="cvcCardClient" value="'.$row ['cvc_card'].'" class="form-control" placeholder="CVC" required="required">
					</div>
				</div>';
				}else{

				}				
				?>
				<div class="form-group">
					<label class="col-sm-3 control-label">Monto de la compra</label>
					<div class="col-sm-4">
						<input type="text" name="priceClient" maxlength="3" value="<?php echo $row ['price']; ?>" class="form-control" placeholder="Monto de la compra" readonly="readonly">
					</div>
				</div>
				<hr />
				<strong><h4 style="text-align: center; background: black; color: white;">Datos de la compra	</h4></strong>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label">Re-order</label>
					<div class="col-sm-4">
					<?php if($row ['re_order']==1){
						echo '<select class="form-control" name="reOrderClient" readonly="readonly">
						<option value"1">Si</option>
						<option value"0">No</option>
						</select>';
					}else{
						echo '<select class="form-control" name="reOrderClient" readonly="readonly">
						<option value"0">No</option>
						<option value"1">Si</option>
						</select>';
					}?>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Comentario del Agente</label>
					<div class="col-sm-4">
					<textarea type="text" style="height: 100px;" class="form-control" readonly="readonly"><?php echo $row ['note_agent']; ?></textarea>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Comentario del Verificador</label>
					<div class="col-sm-4">
					<textarea type="text" style="height: 100px;" class="form-control" readonly="readonly"><?php echo $row ['note_verif']; ?></textarea>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Comentario del Validador</label>
					<div class="col-sm-4">
					<textarea type="text" style="height: 100px;" class="form-control" readonly="readonly"><?php echo $row ['note_valid']; ?></textarea>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Comentario del ERR</label>
					<div class="col-sm-4">
					<textarea type="text" style="height: 100px;" class="form-control" readonly="readonly"><?php echo $row ['note_err']; ?></textarea>
						</div>
				</div>
				<?php if($row ['product1']==""){
				}else{
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Producto 1</label>
					<div class="col-sm-4">
						<input type="text" name="product1" value="'.$row ['product1'].'" class="form-control" placeholder="Producto 1" readonly="readonly">
						<input type="text" name="qty1" maxlength="2" value="'.$row ['qty1'].'" class="form-control" placeholder="Cantidad" readonly="readonly">
					</div>
				</div>';
				}
				if($row ['product2']==""){
				}else{
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Producto 2</label>
					<div class="col-sm-4">
						<input type="text" name="product1" value="'.$row ['product2'].'" class="form-control" placeholder="Producto 2" readonly="readonly">
						<input type="text" name="qty1" maxlength="2" value="'.$row ['qty2'].'" class="form-control" placeholder="Cantidad" readonly="readonly">
					</div>
				</div>';
				}
				if($row ['product3']==""){
				}else{
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Producto 3</label>
					<div class="col-sm-4">
						<input type="text" name="product3" value="'.$row ['product3'].'" class="form-control" placeholder="Producto 3" readonly="readonly">
						<input type="text" name="qty3" maxlength="2" value="'.$row ['qty3'].'" class="form-control" placeholder="Cantidad" readonly="readonly">
					</div>
				</div>';
				}
				if($row ['product4']==""){
				}else{
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Producto 4</label>
					<div class="col-sm-4">
						<input type="text" name="product4" value="'.$row ['product4'].'" class="form-control" placeholder="Producto 4" readonly="readonly">
						<input type="text" name="qty4" maxlength="2" value="'.$row ['qty4'].'" class="form-control" placeholder="Cantidad" readonly="readonly">
					</div>
				</div>';
				}
				if($row ['product5']==""){
				}else{
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Producto 5</label>
					<div class="col-sm-4">
						<input type="text" name="product5" value="'.$row ['product5'].'" class="form-control" placeholder="Producto 5" readonly="readonly">
						<input type="text" name="qty5" maxlength="2" value="'.$row ['qty5'].'" class="form-control" placeholder="Cantidad" readonly="readonly">
					</div>
				</div>';
				}				
				?>			
				<div class="form-group">
					<label class="col-sm-3 control-label">Status de la orden</label>
					<div class="col-sm-4">
						<input type="text" name="statusOrder" value="<?php echo $row ['status']; ?>" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de la venta</label>
					<div class="col-sm-4">
						<input type="date" name="dateOrderUp" value="<?php echo $row ['fecha_add']; ?>" class="form-control" readonly="readonly">
					</div>
				</div>
				<?php if($row['note_deliv']==""){
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Comentario del ERR</label>
					<div class="col-sm-4">
						<textarea name="noteDeliv" maxlength="64000" style="height: 100px;" class="form-control" placeholder="Comentario del ERR"></textarea>
						</div>
					</div>';
				}else{
					echo '<div class="form-group">
					<label class="col-sm-3 control-label">Comentario del ERR</label>
					<div class="col-sm-4">
						<textarea name="noteDelivcoment" maxlength="64000" style="height: 100px;" class="form-control" readonly="readonly">'.$row['note_deliv'].'</textarea>
						</div>
					</div><div class="form-group">
					<label class="col-sm-3 control-label">Comentario del ERR</label>
					<div class="col-sm-4">
						<textarea name="noteDeliv" maxlength="64000" style="height: 100px;" class="form-control" placeholder="Comentario del ERR"></textarea>
						</div>
					</div>';
				}
				?>
									
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="deliver" class="btn btn-sm btn-success" value="Entregar">
						<input type="submit" name="modificate" class="btn btn-sm btn-primary" value="Guardar">						
						<a href="../views/index-table-order-pent-deliv.php" class="btn btn-sm btn-info">Regresar</a>				
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>