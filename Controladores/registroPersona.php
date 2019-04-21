<?php
include_once '../BaseDatos/baseDatos.php';

if (isset($_POST['cedula'])) {
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

$db = new baseDatos();

$query = "INSERT INTO individual(cedula, NombresApellidos, grupoFamiliarNro,
        fechaNacimiento, Edad, sexo, TipoPersona, Telefono, correo, carnetPatria,
        codigo, SerialCarnet, observacionSocial, Manzanero, NroManzana) VALUE ('$cedula',
        '$nombres', '$familia', '$fecha', '$edad', '$sexo', '$tipo', '$telefono', '$correo', '$carnet',
        '$codigo', '$serial', '$observacion', '$manzanero',  '$manzana' )";
        $resultado = mysqli_query($db->conection(), $query);
        if (!$resultado) {
            die('error en la sentencia'. mysqli_error($db->conection()));
        } 
        echo 'Tarea registrada exitosamente';
}
 
