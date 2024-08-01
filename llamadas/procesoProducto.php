<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$action= $_REQUEST['accion'];
	

	if($action=="agregar"){
		$codprod = $_REQUEST['codigo'];
		$nomprod = $_REQUEST['nombre'];
		$precprod = $_REQUEST['precio'];
		$codcate= $_REQUEST['categoria'];
		$fotoprod = $_FILES['foto']['name'];
		$ruta = $_FILES['foto']['tmp_name'];
		$destino = '../images/'.$fotoprod;
		copy($ruta, $destino);
		Createproducto($codprod,$nomprod,$precprod,$destino,$codcate,$conn);
	}
    else if($action=="modificar"){
		$codprod = $_REQUEST['codigo'];
		$nomprod = $_REQUEST['nombre'];
		$precprod = $_REQUEST['precio'];
		$codcate= $_REQUEST['categoria'];
		$fotoprod = $_FILES['foto']['name'];
		$ruta = $_FILES['foto']['tmp_name'];
		$destino = '../images/'.$fotoprod;
		copy($ruta, $destino);
		
		actualizarTodoProducto($codprod,$nomprod,$precprod,$destino,$codcate,$conn);
	}
	else if ($action=="eliminar"){
		$codprod = $_REQUEST['codigo'];
		Deleteproducto($codprod,$conn);
	}

	header('location:../paginas/producto/listar.php');
?>