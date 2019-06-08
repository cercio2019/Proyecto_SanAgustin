<?php

include_once '../BaseDatos/baseDatos.php';

class User
{
    function __construct(){
        $this->db = new baseDatos();
    }

    public function Registros()
    {    
        $query = "SELECT * FROM usuario";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }
        return $resultado;
    }

   public function Registrar($datos)
   {
       $cedula= $datos['cedula'];
       $nombre= $datos['nombre'];
       $apellido= $datos['apellido'];
       $contraseña= $datos['contraseña'];
       $tipo= $datos['tipo'];

       $query = "INSERT INTO usuario(cedula_usuario, Nombre, Apellido, clave, tipo)
       VALUES ('$cedula', '$nombre', '$apellido', '$contraseña', '$tipo')";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }else {
            return 'Registro de usuario Exitoso';
        }
   }

   public function BuscarContraseña($cedula, $contraseña)
   {
    $ci= $cedula;
    $clave= $contraseña;

    $query = "SELECT clave FROM usuario WHERE cedula_usuario = '$ci' AND clave = '$clave' ";
    $resultado = mysqli_query($this->db->conection(), $query);
    if (!$resultado) {
        die('error en la busqueda'. mysqli_error($this->db->conection()));
    }
    return $resultado;
   }

   public function CambiarContraseña($cedula, $contraseña)
   {
       $pasword = $contraseña;
       $ciUser = $cedula;
       $query = "UPDATE usuario SET clave = '$pasword' WHERE cedula_usuario = '$ciUser' ";
       $resultado = mysqli_query($this->db->conection(), $query);
    if (!$resultado) {
        die('error en la busqueda'. mysqli_error($this->db->conection()));
    }else{
     return 'La contraseña de este Usuario ha sido modificada exitosamente';
    }

   }

   public function Eliminar($cedula)
   {
    $cedulaPersonal = $cedula;
    $query = "DELETE FROM usuario WHERE cedula_usuario = $cedulaPersonal ";
    $resultado= mysqli_query($this->db->conection(), $query);
    if (!$resultado) {
        die('error en la setencia'. mysqli_error($this->db->conection()));
    }else {
        return 'El registro ha sido eliminado del sistema';
    }
   }

}
