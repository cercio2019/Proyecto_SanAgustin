<?php
include_once '../Modelos/User.php';

$user = new User();

$lista = $user->Registros();

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'cedula' => $row['cedula_usuario'],
        'nombre' => $row['NombreApellido'],
        'tipo' => $row['tipo']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;


