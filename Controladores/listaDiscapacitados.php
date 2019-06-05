<?php
include_once '../Modelos/Discapacitado.php';

$discapacitado = new Discapacitado();

$lista = $discapacitado->Registros();

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'NroPersonal' => $row['NroPersonal'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['nombreApellido'],
        'edad' => $row['edad'],
        'tipoDiscapacidad' => $row['tipoDiscapacidad'],
        'gradoDiscapacidad' => $row['gradoDiscapacidad'],
        'carnetDiscapacidad' => $row['carnetCONAPDIS']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;