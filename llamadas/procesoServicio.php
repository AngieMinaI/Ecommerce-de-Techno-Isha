 <?php
	require('../controlador/conexion.php');
	$conn= conectar();

	$action = $_REQUEST['accion'];
	if($action=="agregar"){
		$cod = $_REQUEST['codigo'];
		$nomser = $_REQUEST['desc'];
		agregarServicio($cod,$nomser,$conn);
	}else if ($action=="eliminar"){
		$cod = $_REQUEST['codigo'];
		eliminarServicio($cod,$conn);
	}else if($action=="modificar"){
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		actualizarServicio($cod,$nom,$conn);
	}
	header('location:../paginas/servicios/listar.php');
?>