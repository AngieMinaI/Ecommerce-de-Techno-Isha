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
		$conn=conectar();
	?>
	<h2>Agregar Producto</h2>
	<form class="contenedor-novedad"action="../../llamadas/procesoProducto.php" method="post" enctype="multipart/form-data">
			<label>Codigo Producto</label>
			<input required type="text" name="codigo"><br>
			<label>Nombre Producto</label>
			<input required type="text" name="nombre"><br>
			<label>Precio Producto</label>
			<input required type="number" name="precio"><br>
			<label>Foto Producto</label>
			<input required type="file" name="foto"><br>
			<label>Categoría</label>
			<select required name="categoria" value="<?=$data[4]?>">
				<?php
				foreach (listarCategoria($conn) as $key => $value) {
				?>
					<option value="<?=$value[0]?>"><?=$value[0]?></option>
				<?php
					}
				?>
			</select>
			<input type="hidden" name="accion" value="agregar">
			<input type="submit" name="aceptar" value="Aceptar">
	</form>	
		<?php

include("../includesad/footer.php");
?>
</body>
</html>