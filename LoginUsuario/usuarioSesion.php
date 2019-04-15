<?php 

class UsuarioSesion
{
	
	function __construct(){
		session_start();
	}

	public function setCurrentUsuario($user)
	{
		$_SESSION['usuario'] = $user;
	}

	public function getCurrentUsuario()
	{
	    return $_SESSION['usuario'];
	}

	public function closeSesion()
	{
		session_unset();
		session_destroy();
	}
}
 ?>