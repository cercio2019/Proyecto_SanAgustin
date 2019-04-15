<?php
require 'configuracion/configuracion.php';
require_once 'LoginUsuario/controllerLogin.php';
spl_autoload_register(function($nombreClase){
    
    require_once 'CONTROLADORES/'.$nombreClase.'.php';
});

$login = new ControllerLogin();
$login->Login();
              
?>