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
        $codigo = $datos['codigo'];
        $serial = $datos['serial'];
        $observacion = $datos['observacion'];
        $manzanero = $datos['manzanero'];
      
        $query = "UPDATE individual SET cedula = $cedula, NombresApellidos = '$nombres', fechaNacimiento = '$fecha', Edad = '$edad', sexo = '$sexo', TipoPersona = '$tipo', Telefono = '$telefono', correo = '$correo', codigo = '$codigo', SerialCarnet = '$serial', observacionSocial = '$observacion', Manzanero = '$manzanero' WHERE idPersona = '$id' ";
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
}