<?php
include_once '../BaseDatos/baseDatos.php';

class Persona 
{
    function __construct(){
        $this->db = new baseDatos();
    }

    public function Registros($idFamiliar)
    {
        $nroFamilia = $idFamiliar;
        $query = "SELECT * FROM individual WHERE grupoFamiliarNro = $nroFamilia ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }

    public function RegistroIndividual($idPersona)
    {
        $id = $idPersona;
        $query = "SELECT * FROM individual WHERE idPersona = $id ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }

    public function Registrar($cedula, $nombreCompleto, $fecha, $edad, $sexo,
     $tipo, $telefono, $correo, $carnet, $codigo, $serial, $manzanero, $observacion,
     $familia, $manzana)
    {
      $ci = $cedula;  $nombres = $nombreCompleto;  $fechaNAC = $fecha;
      $e = $edad;  $sex = $sexo;  $type= $tipo; $tele= $telefono; $email = $correo;
      $cart = $carnet; $cod = $codigo; $seri = $serial; $lider = $manzanero;
      $observar = $observacion; $nrofam = $familia; $nroman = $manzana;

        $query = "INSERT into tareas(cedula, Nombres y apellidos, grupoFamiliarNro,
        fechaNacimiento, Edad, sexo, TipoPersona, Telefono, correo, carnetPatria,
        codigo, serial, observacionSocial, Manzanero, NroManzana) VALUE ('$ci',
        '$nombres', '$nrofam', '$fechaNAC', '$e', '$sex', '$type', '$tele', '$email', '$cart',
        '$cod', '$seri', '$lider', '$observar',  '$nroman' )";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la sentencia'. mysqli_error($this->db->conection()));
        }                          
    }

    public function Editar()
    {
        # code...
    }

    public function Eliminar()
    {
        # code...
    }
}