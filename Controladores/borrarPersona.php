<?php
include_once '../Modelos/Persona.php';

if (isset($_POST['idpersona'])) {
    
    $id = $_POST['idpersona'];

    $personas = new Persona();

    $mensaje = $personas->Eliminar($id);

    echo $mensaje;
}