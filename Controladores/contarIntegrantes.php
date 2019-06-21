<?php
include_once '../Modelos/Persona.php';

$idfamiliar = $_POST['nrofamiliar'];

$persona = new Persona();

$conteo = $persona->contarIntegrantes($idfamiliar);

$json = array();
while ($row = mysqli_fetch_array($conteo)) {

    $json[] = array(
        'cantidad' => $row['COUNT(grupoFamiliarNro)']
        
    );       
}

$jsonString = json_encode($json);
echo $jsonString;