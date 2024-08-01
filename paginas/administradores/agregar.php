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
	<h2>Agregar Administrador</h2>
	<form class="contenedor-novedad" action="../../llamadas/procesoAdmin.php" method="post">
		<div class="item-novo">
			<label>Nombre de administrador</label>
			<input type="text" name="nomuser"><br>
		</div>
		<div class="item-novo">
			<label>contraseña</label>
			<input type="password" name="pass"><br>
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