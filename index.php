<?php
require 'configuracion/configuracion.php';
require_once 'LoginUsuario/controllerLogin.php';
require_once 'CONTROLADORES/controller.php';

$login = new ControllerLogin();
$login->Login();
              
?>