<?php
include_once '../Modelos/Discapacitado.php';

$discapacitado = new Discapacitado();

$lista = $discapacitado->Registros();

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'NROdiscapacitado' => $row['NroRegistroMedico'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['nombreApellido'],
        'edad' => $row['edad'],
        'tipoDiscapacidad' => $row['tipoDiscapacidad']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;