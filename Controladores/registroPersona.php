<?php
include_once '../Modelos/Persona.php';
include_once '../Modelos/Discapacitado.php';


if (isset($_POST['cedula'])) {
    
$cedula = $_POST['cedula'];
$nombres = $_POST['nombreApellido'];
$fecha = $_POST['fechaNac'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$tipo = $_POST['tipo'];
$correo = $_POST['correo'];
$carnet = $_POST['carnet'];
$hogarPatria = $_POST['hogarPatria'];
$vivienda = $_POST['vivienda'];
$nroCasa = $_POST['nroCasa'];
$manzanero = $_POST['manzanero'];
$discapacidad = $_POST['discapacitado'];
$manzana = $_POST['manzana'];
$familia = $_POST['familia'];


$datos = [
    'cedula' => $cedula,
    'nombres' => $nombres,
    'fecha' => $fecha,
    'edad' => $edad,
    'sexo' => $sexo,
    'telefono' => $telefono,
    'tipo' => $tipo,
    'correo' => $correo,
    'carnet' => $carnet,
    'hogar' => $hogarPatria,
    'vivienda' => $vivienda,
    'nroCasa' => $nroCasa,
    'manzanero' => $manzanero,
    'discapacidad' => $discapacidad,
    'manzana' => $manzana,
    'familia' => $familia
    ];

    $persona = new Persona();
    $discapacitado = new Discapacitado();

    if ($discapacidad == 'SI') {
        
      $mensaje =  $persona->Registrar($datos);

        $discapacitado->RegistroIndividual($datos);

    }else {
        $mensaje =  $persona->Registrar($datos);
    }

    echo $mensaje;

}
 
