<?php
include_once '../BaseDatos/baseDatos.php';

class Manzanas
{
    function __construct(){
        $this->db = new baseDatos();
    }

    public function Registros()
    {

        $query = "SELECT * FROM manzanas ";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'. mysqli_error($this->db->conection()));
        }

        return $resultado;
    }

    public function Registrar()
    {
        # code...
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