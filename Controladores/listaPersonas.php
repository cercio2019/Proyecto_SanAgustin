<?php
include_once '../Modelos/Persona.php';

$idFamilia= $_POST['idFamiliar'];

$personas = new Persona();

$lista = $personas->Registros($idFamilia);

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'id' => $row['idPersona'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['NombresApellidos'],
        'edad' => $row['Edad']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;
