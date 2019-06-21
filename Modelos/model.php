 <?php
class EnlacesPaginas{

public function enlacesPaginasModel($enlacesModel){

if($enlacesModel=="inicio" || $enlacesModel=="registros" || $enlacesModel=="discapacitados"
|| $enlacesModel=="TerceraEdad" || $enlacesModel=="Documentos" || $enlacesModel=="registroUsuario"
|| $enlacesModel=="modificarContrasena"){

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