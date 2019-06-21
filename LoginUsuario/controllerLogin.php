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

}
 ?>