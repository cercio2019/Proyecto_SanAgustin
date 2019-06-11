<?php
include_once '../Modelos/User.php';

if (isset($_POST['Nuevapassword'])) {
    
    $usuario = new User();
    $cedula = $_POST['cedula'];  
    $contraseñaNueva = $_POST['Nuevapassword'];
    $contraseñaConfirmada = $_POST['ConfirmPassword'];
    
     $mensaje = $usuario->CambiarContraseña($cedula, $contraseñaNueva);
        
     echo $mensaje;
    
}