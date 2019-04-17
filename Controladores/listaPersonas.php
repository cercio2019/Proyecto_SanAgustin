<?php
include_once '../Modelos/Persona.php';

$idFamilia= $_POST['idFamilia'];

$personas = new Persona();

$lista = $personas->Registros($idFamilia);

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'id' => $row['idPersona'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['Nombres y apellidos'],
        'edad' => $row['Edad']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;
