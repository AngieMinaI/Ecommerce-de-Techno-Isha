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
	<h2>Agregar Categoria</h2>
	<form class="contenedor-novedad" action="../../llamadas/procesoCategoria.php" method="post">
			<input required type="text" name="codigo"><br><br>
			<label>Nombre</label>
			<input required type="text" name="nombre"><br><br>
			<label>Descripción</label>
			<input required type="text" name="descripcion"><br><br>
			
			<input type="hidden" name="accion" value="agregar">
			<input type="submit" name="aceptar" value="Aceptar">
	</form>	

</body>
	<?php

include("../includesad/footer.php");
?>
</html>