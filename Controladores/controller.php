<?php
require_once 'MODELOS/model.php';

class Controller{
	
public function enlacesPaginasController(){

    if(isset($_GET["action"])){
    
  $enlacesController = $_GET["action"];
  
	} else{

  		$enlacesController= "index.php";
  	}

	$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

	include $respuesta;
  }
}
?>