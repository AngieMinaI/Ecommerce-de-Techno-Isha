<?php
require ("../controlador/conexion.php");
$conn=conectar();
$userna=$_REQUEST['user'];
$clave=$_REQUEST['clave'];
$canFilas=validarUser($conn,$userna,$clave);
if($canFilas>0){
    session_start();
    $_SESSION['user']=$userna;
    header("location:../inicio.php");
    

}else{
    echo '<script>alert("Nombre de usuario o clave incorrecta");window.history.back();</script>';
}
?>