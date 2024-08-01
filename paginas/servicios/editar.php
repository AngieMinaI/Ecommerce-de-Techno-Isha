<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		$conn = conectar();
		$cod = $_REQUEST['codigo'];
		$data = buscarServicio($cod,$conn);
	?>
	<h2>Editar Servicio</h2>
	<form class="contenedor-novedad"action="../../llamadas/procesoServicio.php" method="post">
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?=$data[0]?>"><br>
		<input type="hidden" name="accion" value="modificar">
		<input type="submit" name="actualizar" value="Actualizar">
	</form>
</body>
	<?php

include("../includesad/footer.php");
?>
</html>