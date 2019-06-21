<?php
include_once '../Modelos/User.php';
include_once '../Modelos/Persona.php';

if (isset($_POST['CedulaUsuario'])) {
    
    $cedula = $_POST['CedulaUsuario'];

    $usuario = new User();

    $mensaje = $usuario->Eliminar($cedula);

    $user = 'NO';
 
    $persona = new Persona();
    $persona->EditarUsuario($user, $cedula);
 
    echo $mensaje;
}