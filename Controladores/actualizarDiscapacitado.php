<?php

include_once '../Modelos/Discapacitado.php';

$datos = [
'id' => $_POST['id'],
'tipo' => $_POST['tipo'],
'grado' => $_POST['grado'],
'carnet' => $_POST['carnet']
];

$discapacidad = new Discapacitado();

$mensaje = $discapacidad->editarRegistro($datos);

echo $mensaje;