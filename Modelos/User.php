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

}
