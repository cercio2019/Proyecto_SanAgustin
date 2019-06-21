<?php
include_once '../Modelos/Persona.php';

$personas = new Persona();

$lista = $personas->NoDiscapacitados();

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'cedula' => $row['cedula'],
        'nombre' => $row['NombresApellidos'],
        'edad' => $row['Edad'],
        'familia' => $row['grupoFamiliarNro'],
        'manzana' => $row['NroManzana']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;