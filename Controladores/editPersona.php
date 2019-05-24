<?php
include_once '../Modelos/Persona.php';
include_once '../Modelos/Discapacitado.php';

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
'discapacitado' => $_POST['discapacidad']
];

$personas = new Persona();
$discapacitado = new Discapacitado();

if ($personas->EditarPersona($datos)) {
    
    $mensaje =$personas->EditarPersona($datos);
    echo $mensaje;
}else {
    echo 'No se ha podido completar la actualizacion de datos';
}


if ($_POST['discapacidad']== 'NO') {
    
    $cedula = $_POST['cedula'];
    $discapacitado->Eliminar($cedula);

}else {

    $discapacitado->RegistroIndividual($datos);
}

}