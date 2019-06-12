<?php
include_once '../Modelos/User.php';

if (isset($_POST['CedulaUsuario'])) {
    
    $cedula = $_POST['CedulaUsuario'];

    $usuario = new User();

    $mensaje = $usuario->Eliminar($cedula);

    echo $mensaje;
}