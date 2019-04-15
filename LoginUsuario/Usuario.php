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

  

  public function editarUsuario($datos)
  {
    $this->db->query('UPDATE usuario SET Nombre_usuario= :nombre, Apellido_usuario= :apellido WHERE cedula_usuario= :cedula');
    $this->db->bind(':cedula', $datos['cedula']);
    $this->db->bind(':nombre', $datos['nombre']);
    $this->db->bind(':apellido', $datos['apellido']);
    if ($this->db->execute()) {
      return true;
    }else{
      return false;
    }
  }

  public function buscarContraseña($contraseña)
  {
    $this->db->query('SELECT clave FROM usuario WHERE clave= :clave');
    $this->db->bind(':clave', $contraseña);
    $resultado = $this->db->registro();
    return $resultado;
  }

  public function editarContraseña($datos)
  {
     $this->db->query('UPDATE usuario SET clave= :clave WHERE cedula_usuario= :cedula');
     $this->db->bind(':cedula', $datos['cedula']);
     $this->db->bind(':clave', $datos['clave']);

     if ($this->db->execute()) {
       return true;
     }else{
      return false;
     }
  }

  public function registrarUsuario($datos)
  {
    $this->db->query('INSERT INTO usuario (cedula_usuario, Nombre_usuario, Apellido_usuario, clave, tipo_usuario) VALUES (:cedula, :nombre, :apellido, :clave, :tipo)');

    $this->db->bind(':cedula', $datos['cedula']);
    $this->db->bind(':nombre', $datos['nombre']);
    $this->db->bind(':apellido', $datos['apellido']);
    $this->db->bind(':clave', $datos['clave']);
    $this->db->bind(':tipo', $datos['tipo']);

    if ($this->db->execute()) {
        return true;
    }else{
      return false;
    }
  }

  public function eliminarUsuario($cedula)
  {
    $this->db->query('DELETE FROM usuario WHERE cedula_usuario= :cedula');
    $this->db->bind(':cedula', $cedula);

    if ($this->db->execute()) {
      return true;
    }else{
      return false;
    }
  }
}
 ?>