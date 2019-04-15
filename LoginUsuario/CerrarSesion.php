<?php 
include_once 'usuarioSesion.php';
    $userSession = new UsuarioSesion();
    $userSession->closeSesion();
    header("location: ../index.php");
 ?>