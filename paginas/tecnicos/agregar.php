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
	<h2>Agregar Tecnicos</h2>
		<form class="contenedor-novedad" action="../../llamadas/procesoTecnico.php" method="post" enctype="multipart/form-data">

			<div class="item-novo"><br>
				<label >Codigo</label>
				<input type="text" name="codigo" ><br><br>
				<label >Nombre</label>
				<input type="text" name="nombre" ><br><br>
			</div>
			<div class="item-novo"><br>
				<label >Apellido</label>
				<input type="text" name="apellido"><br><br>
				<label >Asig. Servicio</label>
				<select  name="service"> 
					<?php
						foreach (listarServicio($conn) as $key => $value ) {
					?>
					<option value="<?=$value[0]?>"><?=$value[1]?></option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="item-novo"><br>
				<label >Foto</label>
				<input type="file" name="photo" required><br><br>
				<input class="item-novo"type="submit" name="aceptar" value="Aceptar">
			</div><br>
			
			
			
			<input type="hidden" name="accion" value="agregar">

			
			
		</form>

</body>
		<?php

include("../includesad/footer.php");
?>
</html>
