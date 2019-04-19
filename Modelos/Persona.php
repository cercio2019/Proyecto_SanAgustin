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
        $query = "INSERT into tareas(cedula, Nombres y apellidos, grupoFamiliarNro,
        fechaNacimiento, Edad, sexo, TipoPersona, Telefono, correo, carnetPatria,
        codigo, serial, observacionSocial, Manzanero, NroManzana) VALUE ($cedula,
        $nombreCompleto, $familia, $fecha, $edad, $sexo, $tipo, $telefono, $correo, $carnet,
        $codigo, $serial, $manzanero, $observacion,  $manzana )";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la sentencia');
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