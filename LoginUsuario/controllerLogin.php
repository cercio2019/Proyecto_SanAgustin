<?php 
require_once 'LoginUsuario/Usuario.php';
require_once 'LoginUsuario/usuarioSesion.php';

class ControllerLogin
{
	public function Login()
	{
		$sesion = new UsuarioSesion();
 		$user = new Usuario();
           
 		  if (isset($_SESSION['usuario'])) {
       
 		  	$user->setUsuario($sesion->getCurrentUsuario());
 		  	$dato= $user->getUsuario();
 		  	 include_once 'Vistas/template.php';

 		  } else if (isset($_POST['documento']) && isset($_POST['usuario']) && isset($_POST['password'])) {

 		  	 $userForm = $_POST['documento'].'-'.$_POST['usuario'];
 		  	 $passForm = $_POST['password'];

 		  	 $user = new Usuario();

 		  	 if ($user->usuarioExiste($userForm, $passForm)) {
 		  
 		  	 	 $sesion->setCurrentUsuario($userForm);
 		  	 	 $user->setUsuario($userForm);
                 $dato= $user->getUsuario();
 		  	 	 include_once 'Vistas/template.php';
 		  	 	 
 		  	 } else {
 		  	 	$error= 'Nombre de usuario y/o contraseña es incorrecto';
 		  	 	 include_once 'Vistas/login.php'; 
 		  	 } 	 
 		    }else{
             include_once 'Vistas/login.php';
 		  }    
	}

	public function tablaUsuario()
	{
         $user = new Usuario();
         $datos = $user->registroUsuario();
         return $datos;
	}

	public function registrar()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $cedula = $_POST['nacion'].'-'.$_POST['cedula'];
     $datos=[
          'cedula' => $cedula,       
          'nombre' => trim($_POST['nombre']),
          'apellido' => trim($_POST['apellido']),
          'tipo' => trim($_POST['tipo']),
          'clave' => trim($_POST['contraseña']),
       ];
         
         $user = new Usuario();
         
       if($user->registrarUsuario($datos)) {
        header("location: ".RUTA_URL."index.php?action=registroUsuario");
       }else{
        die('Algo salio mal');
       }
        }else{

          $datos=[
          'cedula' => '',      
          'nombre' => '',
          'apellido' => '',
          'tipo' => '',
          'clave' => '',          
       ];
    }
	}

public function buscar()
 {
  $user = new Usuario();

  if (isset($_GET['user'])) {
    
    $cedula=$_GET['user'];
     
       $user->setUsuario($cedula);
       $ciudadano= $user->getUsuario();

       $datos = [
         'cedula'=> $ciudadano->cedula_usuario,     
       ];
  }
  return $datos;
}

  public function CambioContraseña()
  {
     $user = new Usuario();
      $error='';

    if (isset($_GET['user'])) {
      
      if ($_SERVER['REQUEST_METHOD']== 'POST') {

        $clave = $_POST['Actual'];
        $claveActual = $user->buscarContraseña($clave);
        $claveNueva = $_POST['nuevaContraseña'];
        $confirmacion = $_POST['confirmarContraseña'];
  
        if ($clave = $claveActual) {
           if ($claveNueva == $confirmacion) {
             
              $cedula = $_GET['user'];
              $datos=[
              'cedula' => $cedula,
               'clave' => $claveNueva,
              ];
              $error='';

              if ($user->editarContraseña($datos)) {
                header("location: ".RUTA_URL."index.php?action=registroUsuario");
              }else{
                die('algo salio mal');
              }
           }else{
             $error='La confirmacion de la contraseña nueva es erronea';
           }                                   
        }else{
          $error = 'La contraseña que desea cambiar es incorrecta';
        }        
      }
    }else if (isset($_GET['action'])) {
      
      $sesion = new UsuarioSesion();
      if ($_SERVER['REQUEST_METHOD']== 'POST') {

        $clave = $_POST['Actual'];
        $claveActual = $user->buscarContraseña($clave);
        $claveNueva = $_POST['nuevaContraseña'];
        $confirmacion = $_POST['confirmarContraseña'];
  
        if ($clave = $claveActual) {
           if ($claveNueva == $confirmacion) {
              $cedula= $sesion->getCurrentUsuario();            
              $datos=[
              'cedula' => $cedula,
               'clave' => $claveNueva,
              ];

              $error='';
              if ($user->editarContraseña($datos)) {
                header("location: ".RUTA_URL."index.php");
              }else{
                die('algo salio mal');
              }
           }else{
             $error='La confirmacion de la contraseña nueva es erronea';
           }                                   
        }else{
          $error = 'La contraseña que desea cambiar es incorrecta';
        }
        
      }
    }

    return $error;
  }

	public function eliminar()
	{
		if (isset($_GET['CIU'])) {
			
		$cedula = $_GET['CIU'];
          $user = new Usuario();
	if ($user->eliminarUsuario($cedula)) {
	header("location: ".RUTA_URL."index.php?action=registroUsuario");
	}else{
		die('Algo salio mal');
		}
	}
	}

}
 ?>