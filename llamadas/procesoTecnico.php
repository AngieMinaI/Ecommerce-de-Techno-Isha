<?php
	require('../controlador/conexion.php');
	$conn= conectar();

	$action = $_REQUEST['accion'];
	if($action=="agregar"){
		$cod = $_REQUEST['codigo'];
		$nomtec = $_REQUEST['nombre'];
		$apetec = $_REQUEST['apellido'];
		$codser= $_REQUEST['service'];
		$fot = $_FILES['photo']['name'];
		$src = $_FILES['photo']['tmp_name'];
		$dest = '../images/nosotros/'.$fot;
		copy($src,$dest);
		agregarTecnicos($cod,$nomtec,$apetec,$codser,$fot,$conn);
	}else if ($action=="eliminar"){
		$cod = $_REQUEST['codigo'];
		eliminarTecnico($cod,$conn);
	}else if($action=="modificar"){
		$cod = $_REQUEST['codigo'];
		$nomtec = $_REQUEST['nombre'];
		$apetec = $_REQUEST['apellido'];
		$codser = $_REQUEST['service'];
		$fot = $_FILES['photo']['name'];
		$src = $_FILES['photo']['tmp_name'];
		$dest = '../images/nosotros/'.$fot;
		copy($src,$dest);
		
		actualizarTecnico($cod,$nomtec,$apetec,$codser,$fot,$conn);
	}
	
	header('location:../paginas/tecnicos/listar.php');
?>