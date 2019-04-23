<?php
include_once '../Modelos/Persona.php';


if (isset($_POST['idpersona'])) {
    $idPersona= $_POST['idpersona'];
}elseif (isset($_POST['nroPersona'])) {
    $idPersona= $_POST['nroPersona'];
}

$personas = new Persona();

$lista = $personas->RegistroIndividual($idPersona);

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'id' => $row['idPersona'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['NombresApellidos'],
         'nrofam' => $row['grupoFamiliarNro'],
         'sexo' => $row['sexo'],
         'tipoPersona' => $row['TipoPersona'],
        'edad' => $row['Edad'],
        'manzanero' => $row['Manzanero']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;