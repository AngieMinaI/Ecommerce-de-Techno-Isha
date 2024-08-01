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
		$conn=conectar();
	?>
	<h2>Agregar Servicio</h2>
	<form class="contenedor-novedad"action="../../llamadas/procesoServicio.php" method="post">
		<div class="item-novo">
			<label>Codigo</label>
			<input type="text" name="codigo"><br>
		</div>
		<div class="item-novo">
			<label>Descripcion</label>
			<input type="text" name="desc"><br>
		</div>
		<div class="item-novo">
			<input type="hidden" name="accion" value="agregar">
			<input type="submit" name="aceptar" value="Aceptar">
		</div>
			
			
			
			
	</form>	

</body>
	<?php

include("../includesad/footer.php");
?>
</html>