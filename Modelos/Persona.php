<?php
include_once 'BaseDatos/Base.php';

class Persona 
{
    function __construct(){
        $this->db = new Base();
    }

    public function Registros()
    {
        $this->db->query('SELECT * FROM individual');
        $resultados = $this->db->excute();
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