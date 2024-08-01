<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$action= $_REQUEST['accion'];
	if($action=="agregar"){
		$nome = $_REQUEST['nombre'];
		$ape = $_REQUEST['apellido'];
		$tdoc = $_REQUEST['tipoDoc'];
		$dis= $_REQUEST['dist'];
		$dni= $_REQUEST['DNI'];
		$dir= $_REQUEST['direc'];
		$tel= $_REQUEST['fono'];
		$correo= $_REQUEST['email'];

		agregarConsumidor($nome,$ape,$tdoc,$dis,$dni,$dir,$tel,$correo, $conn);
		$consu = $dni;

		$cp=$_REQUEST['cod'];
		$tb=$_REQUEST['tipoB'];
		$tp=$_REQUEST['tipo'];
		$mount=$_REQUEST['monto'];
		$msg=$_REQUEST['mensaje'];
		agregarReclamo($consu,$cp,$tb,$tp,$mount,$msg,$conn);
	}
	header('location:../inicio.php');





?>