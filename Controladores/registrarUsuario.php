<?php
include_once '../Modelos/User.php';
include_once '../Modelos/Persona.php';


if (isset($_POST['cedula'])) {

$datos = [
    'cedula' => $_POST['cedula'],
    'nombre' => $_POST['nombre'],
    'edad' => $_POST['edad'],
    'familia' => $_POST['familia'],
    'manzana' => $_POST['manzana'],
    'contraseña' => $_POST['clave'],
    'tipo' => $_POST['tipo']
    ];

   $usuario = new User();
   $mensaje =  $usuario->Registrar($datos);


   $cedula = $_POST['cedula'];
   $user = 'SI';

   $persona = new Persona();
   $persona->EditarUsuario($user, $cedula);

    echo $mensaje;

}
 