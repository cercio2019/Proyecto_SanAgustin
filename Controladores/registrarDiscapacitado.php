<?php
include_once '../Modelos/Discapacitado.php';
include_once '../Modelos/Persona.php';


if (isset($_POST['cedula'])) {
    
$cedula = $_POST['cedula'];
$nombres = $_POST['nombre'];
$fecha = $_POST['fecha'];
$edad = $_POST['edad'];
$manzana = $_POST['manzana'];
$familia = $_POST['familia'];
$tipo = '';
$grado = '';
$carnet = 'No Posee';



$datos = [
    'cedula' => $cedula,
    'nombres' => $nombres,
    'fecha' => $fecha,
    'edad' => $edad,
    'manzana' => $manzana,
    'familia' => $familia,
    'tipo' => $tipo,
    'grado' => $grado,
    'carnet' => $carnet
    ];

    $persona = new Discapacitado();   
    $mensaje =  $persona->RegistroIndividual($datos);
    echo $mensaje;


    $discapacidad = 'SI';
    $discapacitado = new Persona();
    $discapacitado->EditarDiscapacidad($discapacidad, $cedula);
}