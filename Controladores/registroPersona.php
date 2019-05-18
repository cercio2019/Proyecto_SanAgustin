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
$codigo = $_POST['codigo'];
$serial = $_POST['serial'];
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
    'codigo' => $codigo,
    'serial' => $serial,
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
 
