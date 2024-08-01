<?php
	require ("../controlador/conexion.php");
	$conn=conectar();

	$action = $_REQUEST['accion'];
	if($action=="agregar"){
		$nomser = $_REQUEST['nomuser'];
		$pass= $_REQUEST['pass'];
		agregarUsuario($nomser,$pass,$conn);
	}
	header('location:../paginas/LoginUser.php');
?>