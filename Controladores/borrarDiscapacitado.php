<?php
include_once '../Modelos/Discapacitado.php';
include_once '../Modelos/Persona.php';


if (isset($_POST['cedulaDiscapacitado'])) {
     
    $cedula = $_POST['cedulaDiscapacitado'];

    $discapacitado = new Discapacitado();

    $mensaje = $discapacitado->Eliminar($cedula);

    $discapacidad = 'NO';

    $persona = new Persona();

    $persona->EditarDiscapacidad($discapacidad, $cedula);




    echo $mensaje;
}