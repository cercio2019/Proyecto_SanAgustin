<?php
include_once '../BaseDatos/baseDatos.php';

class Familias 
{
    function __construct(){
        $this->db = new baseDatos();
    }

    public function Registros($id)
    {
        $manzana = $id;
        $query = "SELECT * FROM familias WHERE nroManzana = $manzana";
        $resultado = mysqli_query($this->db->conection(), $query);
        if (!$resultado) {
            die('error en la busqueda'.mysqli_error($this->db->conection()));
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
