<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		$cod = $_REQUEST['codigo'];
		$data = buscarCategoria($cod,$conn)
	?>
	<h2>Editar Categoria</h2>
	<form  class="contenedor-novedad" action="../../llamadas/procesoCategoria.php" method="post">
			
			<input type="hidden" name="codigo" value="<?=$cod?>"><br>
			<label>Nombre</label>
			<input type="text" required name="nombre" value="<?=$data[0]?>"><br>
			<label>Descripcion</label>
			<input type="text" required name="descripcion"  value="<?=$data[1]?>">
			
			<input type="hidden" name="accion" value="modificar">
			<input type="submit" name="actualizar" value="Actualizar">
	</form>	
	<?php

include("../includesad/footer.php");
?>

</body>
</html>