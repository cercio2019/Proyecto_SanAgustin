<?php
include_once '../Modelos/Persona.php';

if (isset($_POST['cedula'])) {

$datos = [
'id' => $_POST['id'],
'cedula' => $_POST['cedula'],
'nombres' => $_POST['nombre'],
'fecha' => $_POST['fecha'],
'edad' => $_POST['edad'],
'sexo' => $_POST['sexo'],
'telefono' => $_POST['telefono'],
'tipo' => $_POST['tipo'],
'correo' => $_POST['correo'],
'codigo' => $_POST['codigo'],
'serial' => $_POST['serial'],
'manzanero' => $_POST['manzanero'],
'observacion' => $_POST['observacion']
];

$personas = new Persona();

if ($personas->EditarPersona($datos)) {
    
    $mensaje =$personas->EditarPersona($datos);
    echo $mensaje;
}else {
    echo 'No se ha podido completar la actualizacion de datos';
}

}