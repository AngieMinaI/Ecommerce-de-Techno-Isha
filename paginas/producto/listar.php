<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bdtablas.css">
	<link rel="stylesheet" type="text/css" href="../../css/boton.css">	
	<link rel="stylesheet" type="text/css" href="../../css/incio.css">
	
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
	<h2>Listar Producto</h2>
	<div class="contenedor-novedad">
	<table>
		<tr class="tabehead">
			<th>Código</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Foto</th>
			<th>Categoría</th>
			<th>Acción</th>
		</tr>
		<?php
			foreach (listarProducto($conn) as $key => $value) {
		?>
				<tr>
					<td><?=$value[0]?></td>
					<td class="nompro"><?=$value[1]?></td>
					<td class="precio">S/.<?=$value[2]?></td>
					<td><img src="../../images/<?=$value[3]?>" width="100" height="120"></td>
					<td><?=$value[4]?></td>
					<td>
						<a href="../../llamadas/procesoProducto.php?accion=eliminar&codigo=<?=$value[0]?>">Eliminar</a>
						<a href="editar.php?codigo=<?=$value[0]?>">Modificar</a>
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