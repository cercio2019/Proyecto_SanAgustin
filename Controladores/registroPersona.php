<?php
include_once '../Modelos/Persona.php';

$cedula = $_POST['cedula'];
$nombres = $_POST['nombreApellido'];
$fecha = $_POST['fechaNac'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$tipo = $_POST['tipo'];
$correo = $_POST['correo'];
$carnet = $_POST['carnet'];
$codigo = $_POST['codigo'];
$serial = $_POST['serial'];
$manzanero = $_POST['manzanero'];
$observacion = $_POST['observacion'];
$manzana = $_POST['manzana'];
$familia = $_POST['familia'];

$personas = new Persona();

$personas->Registrar($cedula, $nombres, $fecha, $edad, $sexo, $tipo, $telefono,
$correo, $carnet, $codigo, $serial, $manzanero, $observacion, $familia, $manzana);
