<?php
include_once '../Modelos/Persona.php';

$personas = new Persona();

$lista = $personas->TerceraEdad();

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'id' => $row['idPersona'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['NombresApellidos'],
        'familia' => $row['grupoFamiliarNro'],
        'edad' => $row['Edad'],
        'manzana' => $row['NroManzana']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;
