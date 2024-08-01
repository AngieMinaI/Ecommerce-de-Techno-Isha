<?php
require ("../controlador/conexion.php");
$conn=conectar();
$admin=$_REQUEST['administrador'];
$clave=$_REQUEST['clave'];
$nFilas=validarAdmin($conn,$admin,$clave);
if($nFilas>0){
    session_start();
    $_SESSION['admin']=$admin;
    header("location:../paginas/administrador.php");
}else{
    echo '<script>alert("Nombre de administrador o clave incorrecta");window.history.back();</script>';
}
?>