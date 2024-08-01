<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/boton.css">	
	<link rel="stylesheet" type="text/css" href="../../css/incio.css">
</head>
 
<body>
	<?php
		require('../../controlador/conexion.php');
		include('../../includes/headeruser.php');
		$conn=conectar();
	?>

	
	<h2>Registrar Usuario</h2>
	<form class="contenedor-novedad" action="../../llamadas/procesoRegistro.php" method="post">
		<div class="item-novo">
			<label>Nombre de Usuario</label>
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