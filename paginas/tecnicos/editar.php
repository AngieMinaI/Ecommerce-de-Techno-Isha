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
		$data = buscarTecnico($cod,$conn);
		$sertec=$data[2];
		$ser = buscarServicio($sertec,$conn);
	?>
	<h2>Editar Tecnicos</h2>
	<form class="contenedor-novedad" action="../../llamadas/procesoTecnico.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<div class="item-novo">

			<label>Nombre</label>
			<input type="text" name="nombre" value="<?=$data[0]?>"><br>
		</div>
		<div class="item-novo">
			<label>Apellido</label>
			<input type="text" name="apellido" value="<?=$data[1]?>"><br>
		</div>
		<div class="item-novo">
			<img src="../../images/nosotros/<?=$data[3]?>" width="100" heigth="100">
		</div>
		<div class="item-novo">
			<label>Foto </label>
			
			<input type="file" name="photo" required><br>
		</div>
		<div class="item-novo">
			<label>Elige Servicio</label>
			<select  name="service"> 
			<option class="precio" value="<?=$data[2]?>"><?=$ser[0]?></option>
			<?php
				foreach (listarServicio($conn) as $key => $value ) {
			?>
			<option value="<?=$value[0]?>"><?=$value[1]?></option>

			<?php
				}
			?>
			</select>
			
			
		</div>
		<div class="item-novo" >
			<input type="submit" name="actualizar" value="Actualizar">
			<input type="hidden" name="accion" value="modificar">
			
		</div>		
		
		
	</form>
</body>
		<?php

include("../includesad/footer.php");
?>
</html>