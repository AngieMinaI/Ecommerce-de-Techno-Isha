<?php
    session_start();
    session_destroy();
    header("location:../paginas/loginAdm.php");
?>