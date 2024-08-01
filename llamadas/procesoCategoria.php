<?php
	require('../controlador/conexion.php');
	$conn = conectar();

		$action	= $_REQUEST['accion'];

		if ($action=="agregar") {
			$cod = $_REQUEST['codigo'];
			$nom = $_REQUEST['nombre'];
			$desc = $_REQUEST['descripcion'];
			agregarCategoria($cod,$nom,$desc,$conn);
		}
		 else if ($action=="eliminar") {
			$cod = $_REQUEST['codigo'];
			eliminarCategoria($cod,$conn);
		}
		else if ($action=="modificar") {
			$cod = $_REQUEST['codigo'];
			$nom = $_REQUEST['nombre'];
			$desc = $_REQUEST['descripcion'];
			actualizarCategoria($cod,$nom,$desc,$conn);
		}

	
	header('location:../paginas/categoria/listar.php');
?>