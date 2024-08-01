
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
<h2>Listar Servicio</h2>
<div class="contenedor-novedad">
	<table>
		<tr class="tabehead">
			<th >Codigo</th>
			<th>Descripcion</th>
			<th>Accion</th>
		</tr>
			<?php
				foreach (listarServicio($conn) as $key => $value) {
			?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td>
					<nav class="navegacion">
						<a href="../../llamadas/procesoServicio.php?accion=eliminar&codigo=<?=$value[0]?>">Eliminar</a>
						<a href="editar.php?codigo=<?=$value[0]?>">Modificar</a>
					</nav>
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