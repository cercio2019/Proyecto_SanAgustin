<?php
include_once '../Modelos/User.php';

if (isset($_POST['contraseñaActual'])) {
    
    $usuario = new User();
    $cedula = $_POST['cedula'];
    $contraseñaActual = $_POST['contraseñaActual'];
    $contraseñaNueva = $_POST['Nuevapassword'];
    $contraseñaConfirmada = $_POST['ConfirmPassword'];
    $verificarContraseña = $usuario->BuscarContraseña($cedula, $contraseñaActual);

    
   if ($contraseñaActual === $verificarContraseña) {
      
        $mensaje = $usuario->CambiarContraseña($cedula, $contraseñaActual);

   }else {
      $mensaje = 'falta';
   }

        echo $mensaje;
    
}