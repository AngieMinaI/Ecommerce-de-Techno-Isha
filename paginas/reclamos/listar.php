<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bdtablas.css">
	<link rel="stylesheet" type="text/css" href="../../css/boton.css">	
	<link rel="stylesheet" type="text/css" href="../../css/incio.css">
	
</head>

	 <?php
include("../includesad/header.php");
require('../../controlador/conexion.php');
		$conn = conectar();
?>
<body>
	<h2>Libro de Reclamaciones</h2>
<div class="contenedor-novedad">
	<table>
		<tr class="tabehead">
			<th >Codigo Consumidor</th>
			<th>Cod. Pedido</th>
			<th>TipoBien</th>
			<th>Tipo</th>
			<th>Monto</th>
			<th>Mensaje</th>
			<th>Accion</th>
		</tr>
			<?php
				foreach (listarReclamo($conn) as $key => $value) {
			?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td><?=$value[2]?></td>
				<td><?=$value[3]?></td>
				<td><?=$value[4]?></td>
				<td><?=$value[5]?></td>
				
			</tr>
			<?php
				}
				?>
		</table>		
</div>		
	
<?php

include("../includesad/footer.php");
?>

</body>
</html>