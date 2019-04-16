<?php
include_once '../Modelos/Manzanas.php';

$cuadra = new Manzanas();

$lista = $cuadra->Registros();

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(

        'manzana' => $row['manzana'],
        'id' => $row['IdManazana']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;