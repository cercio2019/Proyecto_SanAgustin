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

    public function RegistroIndividual($id)
    {
        $idpersona = $id;
        $query = "SELECT * FROM individual WHERE idPersona = $idpersona ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }

    public function Registrar($datos)
    {
        $cedula= $datos['cedula'];
        $nombres= $datos['nombres'];
        $familia= $datos['familia'];
        $fecha= $datos['fecha'];
        $edad= $datos['edad'];
        $sexo= $datos['sexo'];
        $tipo= $datos['tipo'];
        $telefono= $datos['telefono'];
        $correo= $datos['correo'];
        $carnet= $datos['carnet'];
        $hogar= $datos['hogar'];
        $vivienda = $datos['vivienda'];
        $nroCasa = $datos['nroCasa'];
        $discapacidad= $datos['discapacidad'];
        $manzanero= $datos['manzanero'];
        $manzana= $datos['manzana'];

        $query = "INSERT INTO individual (cedula, NombresApellidos, grupoFamiliarNro, fechaNacimiento, Edad, sexo, TipoPersona, Telefono, correo, carnetPatria, hogaresDeLaPatria, Discapacidad, viviendaPropia, referenciaNroCasa, Manzanero, NroManzana) VALUE ('$cedula', '$nombres', '$familia', '$fecha', '$edad', '$sexo', '$tipo', '$telefono', '$correo', '$carnet', '$hogar', '$discapacidad', '$vivienda', '$nroCasa', '$manzanero', '$manzana')";

        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la sentencia'. mysqli_error($this->db->conection()));
        } 
        return 'Persona registrada exitosamente';
    }

    public function EditarPersona($datos)
    {
        $id = $datos['id'];
        $cedula = $datos['cedula'];
        $nombres = $datos['nombres'];
        $fecha = $datos['fecha'];
        $edad = $datos['edad'];
        $tipo = $datos['tipo'];
        $sexo = $datos['sexo'];
        $telefono = $datos['telefono'];
        $correo = $datos['correo'];
        $carnet= $datos['carnet'];
        $hogar= $datos['hogar'];
        $vivienda = $datos['vivienda'];
        $nroCasa = $datos['nroCasa'];
        $discapacidad = $datos['discapacitado'];
        $manzanero = $datos['manzanero'];
      
        $query = "UPDATE individual SET cedula = '$cedula', NombresApellidos = '$nombres', fechaNacimiento = '$fecha', Edad = '$edad', sexo = '$sexo', TipoPersona = '$tipo', Telefono = '$telefono', correo = '$correo', carnetPatria = '$carnet', hogaresDeLaPatria = '$hogar', Discapacidad = '$discapacidad', viviendaPropia = '$vivienda', referenciaNroCasa = '$nroCasa',  Manzanero = '$manzanero' WHERE idPersona = '$id' ";
            $resultado = mysqli_query($this->db->conection(), $query);
            if (!$resultado) {
                die('error en la busqueda'. mysqli_error($this->db->conection()));
            }else {
                return 'El registro se ha actualizado satisfactoriamente';
            }       
    }

    public function Eliminar($id)
    {
        $idpersona = $id;
        $query = "DELETE FROM individual WHERE idPersona = $idpersona ";
        $resultado= mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la setencia'. mysqli_error($this->db->conection()));
        }else {
            return 'El registro ha sido eliminado del sistema';
        }
    }

    public function TerceraEdad()
    {
        $query = "SELECT * FROM individual WHERE Edad > 59 ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }
}