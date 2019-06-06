<?php
include_once '../Modelos/User.php';

if (isset($_POST['cedulaUsuario'])) {
    
    $cedula = $_POST['cedulaUsuario'];

    $usuario = new User();

    $mensaje = $usuario->Eliminar($cedula);

    echo $mensaje;
}