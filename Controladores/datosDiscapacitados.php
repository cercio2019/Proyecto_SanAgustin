<?php

include_once '../Modelos/Discapacitado.php';

if (isset($_POST['NROdiscapacitado'])) {
    
   $id = $_POST['NROdiscapacitado'];

   $discapacidad = new Discapacitado();
   
   $lista = $discapacidad->datosPersonales($id);

   $json = array();
   while ($row = mysqli_fetch_array($lista)) {
   
       $json[] = array(
           'id' => $row['NroPersonal'],
           'cedula' => $row['cedula'],
           'nombreApellido' => $row['nombreApellido'],
           'fecha' => $row['fechaNacimiento'],
           'edad' => $row['edad'],
           'tipo' => $row['tipoDiscapacidad'],
           'grado' => $row['gradoDiscapacidad'],
           'carnet' => $row['carnetCONAPDIS']                 
       );       
   }
   
   $jsonString = json_encode($json);
   echo $jsonString;


}