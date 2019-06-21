<?php
include_once "../BaseDatos/baseDatos.php";

class  Discapacitado
{
     function __construct()
    {
        $this->db = new baseDatos();
    }

    public function Registros()
    {
        $query= "SELECT * FROM discapacitados";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }

    public function datosPersonales($id)
    {
        $idPersonal = $id;
        $query= "SELECT * FROM discapacitados WHERE NroPersonal = '$idPersonal' ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }

    public function RegistroIndividual($datos)
    {
        
        $cedula = $datos['cedula'];
        $nombre = $datos['nombres'];
        $fecha = $datos['fecha'];
        $edad = $datos['edad'];
        $familia = $datos['familia'];
        $manzana = $datos['manzana'];
        $tipo = $datos['tipo'];
        $grado = $datos['grado'];
        $carnet = $datos['carnet'];

        $query= "INSERT INTO discapacitados ( cedula, nombreApellido, fechaNacimiento, edad, grupoFamiliar, Manzana, tipoDiscapacidad, gradoDiscapacidad, carnetCONAPDIS) VALUE ('$cedula', '$nombre', '$fecha', '$edad', '$familia', '$manzana','$tipo', '$grado', '$carnet')";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la sentencia'. mysqli_error($this->db->conection()));
        } 
        return 'Este registro se ha guardado exitosamente';
    }

    public function editarRegistro($datos2)
    {
        $id = $datos2['id'];
        $tipoDiscapacidad = $datos2['tipo'];
        $grado = $datos2['grado'];
        $carnet = $datos2['carnet'];
        $query = "UPDATE discapacitados SET tipoDiscapacidad = '$tipoDiscapacidad', gradoDiscapacidad = '$grado', carnetCONAPDIS = '$carnet'  WHERE NroPersonal = '$id' ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
           die('error en la sentencia'. mysqli_error($this->db->conection()));
        }
        return 'Se ha completado el registro del discapacitado';
    }

    public function Eliminar($cedula)
    {
        $cedulaPerson = $cedula;
        $query = "DELETE FROM discapacitados WHERE cedula = '$cedulaPerson' ";
        $resultado= mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la setencia'. mysqli_error($this->db->conection()));
        }else {
            return 'El registro ha sido eliminado del sistema';
        }
    }

   
}
