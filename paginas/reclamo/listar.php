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
?>
<body>
<?php
		if(!isset($_SESSION['admin']))
			header("location:../loginAdm.php");

		require('../../controlador/conexion.php');
		$conn=conectar();
?>
<h2>Listar reclamos</h2>

<div class="contenedor-novedad">
	<table>
		<tr class="tabehead">
			<th >Codigo reclamo</th>
			<th>Codigo pedido</th>
			<th>Tipo de bien</th>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Mensaje</th>
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