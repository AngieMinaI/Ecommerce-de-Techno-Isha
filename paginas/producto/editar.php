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
		$data = buscarProducto($cod,$conn);
	?>
	<h2>Editar Producto</h2>
	<form class="contenedor-novedad" action="../../llamadas/procesoProducto.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<label>Nombre</label>
		<input type="text" name="nombre" required value="<?=$data[0]?>"><br>
		<label>Precio</label>
		<input type="number" name="precio" required value="<?=$data[1]?>"><br>
		<label>Foto</label>
		<input type="file" name="foto" required><br>
		<label>Categoría</label>
		<select name="categoria" value="<?=$data[4]?>" required>
			<?php
				foreach (listarCategoria($conn) as $key => $value) {
			?>
					<option value="<?=$value[0]?>"><?=$value[0]?></option>
			<?php
				}
			?>
		</select>
		<input type="hidden" name="accion" value="modificar"><br>
		<input type="submit" name="actualizarS" value="Actualizar con foto">
	</form>
		<?php

include("../includesad/footer.php");
?>
</body>
</html>