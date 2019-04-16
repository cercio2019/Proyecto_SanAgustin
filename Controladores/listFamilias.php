<?php
include_once '../Modelos/Familias.php';

$idManzana= $_POST['idManzana'];

$familia = new Familias();

$lista = $familia->Registros($idManzana);

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'id' => $row['idFamilia'],
        'familias' => $row['familia'],
        'nroManzana' => $row['nroManzana']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;


