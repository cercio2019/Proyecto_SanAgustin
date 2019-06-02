<?php 
require_once 'BaseDatos/Base.php';
class Usuario
{
  private $username;
  function __construct()
  {
    $this->db = new Base;
  }

  public function registroUsuario()
  {
    $this->db->query('SELECT * FROM usuario');
    $resultados = $this->db->registros();
    return $resultados;
  }

  public function usuarioExiste($cedula, $password)
  {
    $this->db->query('SELECT * FROM usuario WHERE cedula_usuario = :cedula AND clave = :password');

    $this->db->bind(':cedula', $cedula);
    $this->db->bind(':password', $password);
    $this->db->execute();
    if ($this->db->rowCount()) {
      return true;
    } else {
      return false;
    } 
  }

  public function setUsuario($cedula)
  {         
    $this->db->query('SELECT * FROM usuario WHERE cedula_usuario= :cedula');
    $this->db->bind(':cedula', $cedula);
    $this->username = $this->db->registro();      
  }

  public function getUsuario()
  {
    return $this->username; 
  }

}
 ?>