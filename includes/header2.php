<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<header class="cabecera">
		<img id="logo" src="../images/inicio/logo.png">
		<nav class="navegacion">
			<a href="../inicio.php" target="contenido">Inicio</a>
			<a href="nosotros.php" target="contenido">Nosotros</a>
			<a href="servicios.php" target="contenido">Servicios</a>
			<a href="productos.php" target="contenido">Productos</a>
			<a href="ofertas.php" target="contenido">Ofertas</a>
			<a href="noticias.php" target="contenido">Noticias</a>
			<a href="contactanos.php" target="contenido">Contactanos</a>
			<a href="loginAdm.php" target="contenido">Login adm</a>
			<a href="LoginUser.php" target="contenido">Iniciar Sesión</a>
		</nav>
	</header>
	<?php
    	session_start();
    	if(isset($_SESSION['user'])){
        	echo "<center><p style='color:white;font-size:20px '>Bienvenido: ".$_SESSION['user']."</p><center>";
        	echo '<center><a style="color:white" href="../llamadas/procesoUserCerrar.php" >Cerrar sesion</a></center>';
        }
    ?>
</body>
</html>