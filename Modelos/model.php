 <?php
class EnlacesPaginas{

public function enlacesPaginasModel($enlacesModel){

if($enlacesModel=="inicio" || $enlacesModel=="registros"){

	  $module = "Vistas/Modulos/".$enlacesModel.".php";
	}
	else if($enlacesModel== "index.php"){

			$module= "Vistas/Modulos/inicio.php";
	}
	else{
		 $module= "Vistas/Modulos/inicio.php";
	} 
        return $module;
	}
}
?>