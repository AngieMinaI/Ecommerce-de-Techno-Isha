<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/boton.css">
	<link rel="stylesheet" type="text/css" href="../css/incio.css">
</head>
<body>
	<?php
		include("../includes/headerAdm.php");
		include("../includes/header3.php");
		if(!isset($_SESSION['admin']))
			header("location:loginAdm.php");
		
	?>

	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1 >Gestión de Técnicos</h1>
			<nav class="navegacion">
				<a href="tecnicos/agregar.php">Agregar Técnicos</a> <br><br>
				<a href="tecnicos/listar.php">Listar Técnicos</a><br><br>
			</nav>
		
		</div>
		
	</div>
	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1 >Gestión de Servicios</h1>
			<nav class="navegacion">
				<a href="servicios/agregar.php">Agregar Servicio</a> <br><br>
				<a href="servicios/listar.php">Listar Servicio</a><br><br>
			</nav>
			
		</div>
		
	</div>
	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1 >Gestión de Categoria</h1>
			<nav class="navegacion">
				<a href="categoria/agregar.php">Agregar Categoria</a><br><br>
				<a href="categoria/listar.php">Listar Categoria</a><br><br>
			</nav>
		</div>
		
	</div>
	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1>Gestión de productos</h1>
			<nav class="navegacion" >
				<a href="producto/agregar.php">Agregar productos</a><br><br>
				<a href="producto/listar.php">Listar productos</a><br><br>
        		
			</nav>
		</div>
		
	</div>
	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1>Gestión de Usuarios</h1>
			<nav class="navegacion" >
				
				<a href="usuario/listar.php">Listar usuarios</a><br><br>
        		
			</nav>
		</div>
		
	</div>

	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1>Gestión de Administradores</h1>
			<nav class="navegacion" >
				<a href="administradores/agregar.php">Agregar administradores</a><br><br>
				<a href="administradores/listar.php">Listar administradores</a><br><br>
        		
			</nav>
		</div>
		
	</div>

	<div class="contenedor-novedad">
		<div class="item-novo">
			<h1>Reclamos</h1>
			<nav class="navegacion" >
				<a href="consumidorReclamo/listar.php">Mostrar personas que reclamaron</a><br><br>
				<a href="reclamo/listar.php">Mostrar detalles de reclamos</a><br><br>
        		
			</nav>
		</div>
		
	</div>
	<?php
		include("../includes/footer2.php");
	?>
	

	

</body>
</html>