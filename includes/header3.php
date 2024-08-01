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
		<h2>Bienvenido <?=$_SESSION['admin']?></h1>
		<div class="asd"> <a href="../llamadas/procesoCerrar.php" >Cerrar sesion</a></div>
	</header>
</body>
</html>