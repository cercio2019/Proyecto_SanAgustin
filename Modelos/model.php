 <?php
class EnlacesPaginas{

public function enlacesPaginasModel($enlacesModel){

if($enlacesModel=="inicio"){

	  $module = "Vistas/modulos/".$enlacesModel.".php";
	}
	else if($enlacesModel== "index.php"){

			$module= "Vistas/modulos/inicio.php";
	}
	else{
		 $module= "Vistas/modulos/inicio.php";
	} 
        return $module;
	}
}
?>