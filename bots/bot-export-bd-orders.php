<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=BD_Sales.xls');

	require_once('../actions/conexion-export-bd.php');
	$conn=new Conexion();
	$link = $conn->conectarse();	

if ($_POST) {
    # code...
$fechamin = $_POST['inputFechaMin'];
$fechamax = $_POST['inputFechaMax'];

	$query="SELECT * FROM sales WHERE fecha_add >= '$fechamin' and  fecha_add <= '$fechamax'";
	$result=mysqli_query($link, $query);

}
?>

<table border="1">
	<tr style="background-color:gray;">
		<th>N#</th>
		<th>Agente</th>
		<th>Nombre Cliente</th>
		<th>Apellido Cliente</th>
		<th>Edad</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Zip Code</th>
		<th>zip_4</th>
		<th>Monto</th>
		<th>Tipo de pago</th>
		<th>Tratamiento 1</th>
		<th>Qty 1</th>
		<th>Tratamiento 2</th>
		<th>Qty 2</th>
		<th>Tratamiento 3</th>
		<th>Qty 3</th>
		<th>Tratamiento 4</th>
		<th>Qty 4</th>
		<th>Tratamiento 5</th>
		<th>Qty 5</th>
		<th>Status</th>
		<th>Fecha</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['agente']; ?></td>
					<td><?php echo $row['nombre_cliente']; ?></td>
					<td><?php echo $row['apellido_cliente']; ?></td>
					<td><?php echo $row['edad']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><?php echo $row['direccion']; ?></td>
					<td><?php echo $row['zip_code']; ?></td>
					<td><?php echo $row['zip_4']; ?></td>
					<td><?php echo $row['monto']; ?></td>
					<td><?php echo $row['payment']; ?></td>
					<td><?php echo $row['tratamiento_1']; ?></td>
					<td><?php echo $row['qty_1']; ?></td>
					<td><?php echo $row['tratamiento_2']; ?></td>
					<td><?php echo $row['qty_2']; ?></td>
					<td><?php echo $row['tratamiento_3']; ?></td>
					<td><?php echo $row['qty_3']; ?></td>
					<td><?php echo $row['tratamiento_4']; ?></td>
					<td><?php echo $row['qty_4']; ?></td>
					<td><?php echo $row['tratamiento_5']; ?></td>
					<td><?php echo $row['qty_5']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td><?php echo $row['fecha']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>