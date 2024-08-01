<?php
	require ("../controlador/conexion.php");
	$conn=conectar();

	$action = $_REQUEST['accion'];
	if($action=="agregar"){
		$nomser = $_REQUEST['nomuser'];
		$pass= $_REQUEST['pass'];
		agregarUsuario($nomser,$pass,$conn);
	}else if ($action=="eliminar"){
		$nomser = $_REQUEST['codigo'];
		eliminarUsuario($nomser,$conn);
	}else if($action=="modificar"){
		$codi = $_REQUEST['codigo'];
		$nomser = $_REQUEST['nombre'];
		$pass = $_REQUEST['pass'];
		actualizarUsuario($codi,$nomser,$pass,$conn);
	}
	header('location:../paginas/usuario/listar.php');
?>