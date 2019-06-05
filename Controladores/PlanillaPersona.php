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
        'fecha' => $row['fechaNacimiento'],
         'nrofam' => $row['grupoFamiliarNro'],
         'sexo' => $row['sexo'],
         'telefono' => $row['Telefono'],
         'correo' => $row['correo'],
         'carnet' => $row['carnetPatria'],
         'hogar' => $row['hogaresDeLaPatria'],
         'vivienda' => $row['viviendaPropia'],
         'nroCasa' => $row['referenciaNroCasa'],
         'tipoPersona' => $row['TipoPersona'],
         'edad' => $row['Edad'],
         'manzanero' => $row['Manzanero'],
         'nroManzana' => $row['NroManzana'],
         'discapacidad' => $row['Discapacidad']       
    );       
}

$jsonString = json_encode($json);
echo $jsonString;