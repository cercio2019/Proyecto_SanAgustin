<?php
include_once '../Modelos/Persona.php';

$idPersona= $_POST['idpersona'];

$personas = new Persona();

$lista = $personas->RegistroIndividual($idPersona);

$json = array();
while ($row = mysqli_fetch_array($lista)) {

    $json[] = array(
        'id' => $row['idPersona'],
        'cedula' => $row['cedula'],
        'nombreApellido' => $row['Nombres y apellidos'],
         'nrofam' => $row['grupoFamiliarNro'],
         'sexo' => $row['sexo'],
         'tipoPersona' => $row['TipoPersona'],
        'edad' => $row['Edad'],
        'manzanero' => $row['Manzanero']
    );       
}

$jsonString = json_encode($json);
echo $jsonString;