<?php
include_once '../Modelos/User.php';

if (isset($_POST['cedula'])) {

$datos = [
    'cedula' => $_POST['cedula'],
    'nombre' => $_POST['nombre'],
    'apellido' => $_POST['apellido'],
    'contraseña' => $_POST['contraseña'],
    'tipo' => $_POST['tipo']
    ];

   $usuario = new User();
   $mensaje =  $usuario->Registrar($datos);
  
    echo $mensaje;

}
 