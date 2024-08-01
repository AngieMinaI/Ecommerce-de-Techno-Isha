<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();
	?>
	<header class="cabecera">
		<img id="logo" src="../../images/inicio/logo.png">
			<h2>Bienvenido <?=$_SESSION['admin']?></h1>
			<div class="asd"><a href="../../llamadas/procesoCerrar.php">Cerrar sesion</a></div>
	</header>
	</header>
</body>
</html>