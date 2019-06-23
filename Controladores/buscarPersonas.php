<?php
include_once '../Modelos/Persona.php';

$personas = new Persona();

if (isset($_POST['buscarPers2'])) {
$buscardor = $_POST['buscarPers2'];
$lista = $personas->BuscarNoDiscapacitados($buscardor);

}elseif(isset($_POST['buscarPersona'])){

    $buscardor = $_POST['buscarPersona'];
    $lista = $personas->BuscarNoUsuarios($buscardor);
} 

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