<?php
include_once '../BaseDatos/Base.php';

class Manzanas
{
    function __construct(){
        $this->db = new Base;
    }

    public function Registros()
    {
        $this->db->query('SELECT * FROM manzanas');
        $resultados = $this->db->registros();
        return $resultados;
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