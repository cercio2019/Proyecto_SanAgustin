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
       $familia = $datos['familia'];
       $manzana = $datos['manzana'];
       $clave= $datos['contraseña'];
       $tipo= $datos['tipo'];

       $query = "INSERT INTO usuario (cedula_usuario, NombreApellido, grupoFamiliar, Manzana, clave, tipo) VALUE ('$cedula', '$nombre', '$familia', '$manzana',  '$clave', '$tipo')";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error de sentencia'. mysqli_error($this->db->conection()));
        }
            return 'Registro de usuario Exitoso';
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
    $query = "DELETE FROM usuario WHERE cedula_usuario = '$cedulaPersonal' ";
    $resultado= mysqli_query($this->db->conection(), $query);
    if (!$resultado) {
        die('error en la setencia'. mysqli_error($this->db->conection()));
    }else {
        return 'El registro ha sido eliminado del sistema';
    }
   }

}
