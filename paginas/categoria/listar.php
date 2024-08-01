<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/boton.css">	
	<link rel="stylesheet" type="text/css" href="../../css/incio.css">
	
	<link rel="stylesheet" type="text/css" href="../../css/bdtablas.css">
</head>
<body>
 <?php
include("../includesad/header.php");
?>
	<?php
		if(!isset($_SESSION['admin']))
			header("location:../loginAdm.php");

		require('../../controlador/conexion.php');
		$conn = conectar();
	?>
	<h2>Listar Categoria</h2>
	<div class="contenedor-novedad">
	<table >
		<tr class="tabehead">
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Acción</th>
		</tr>
		<?php
			foreach (listarCategoria($conn) as $key => $value) {
		?>
			<tr>
				<td><?=$value[0]?></td>
				<td class="nompro"><?=$value[1]?></td>
				<td><?=$value[2]?></td>
				<td>
					<a href="../../llamadas/procesoCategoria.php?accion=eliminar&codigo=<?=$value[0]?>">Eliminar</a>
					<a href="editar.php?accion=eliminar&codigo=<?=$value[0]?>">Modificar</a>
				</td>
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




	