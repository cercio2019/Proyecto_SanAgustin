<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href= "Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href= "Bootstrap/css/personalizacion.css">
	<title><?php echo NOMBRESITIO; ?></title>
</head>
<body>
<div class="container-fluid bg-reds">
<div class="row">
	<div class="col-sm-12 col-md-5">
	 <div class="container text-white mt-3">
	 <h3>Sistema San Agustin</h3>
	 </div>
	</div>

    <?php 
    if ($dato->tipo == "Administrador") {
      $menu = 'nav_1';
    }elseif ($dato->tipo == "Invitado") {      
        $menu= 'nav_2';
    }
    ?>
	    <div class="col-sm-12 col-md-5" id="tipoMenu">
      	  <?php include 'Menus/'.$menu.'.php'; ?>
        </div>  
</div>

<div class="row bg-dark text-white">
		<div class="col-6 col-sm-5 col-md-4 text-center mt-2">
			<p>Usuario: <strong> <?php echo $dato->Nombre." ".$dato->Apellido; ?></strong></p>
		</div>
		<div class="col-6 col-sm-5 col-md-4 text-center mt-2">
			<p>Tipo de usuario: <strong id="usuario"><?php echo $dato->tipo; ?></strong></p>
		</div>
	</div>
</div>

<input type="hidden" value="<?php echo $dato->cedula_usuario?>" id="cedulaUser">

<div class="container-fluid mt-4">
<?php
$mvc = new Controller();
$mvc -> enlacesPaginasController();
?>
</div>

<script src="Bootstrap/js/jquery-3.4.0.min.js"></script>
<script src="Bootstrap/js/app.js"></script>
<script src="Bootstrap/js/app2.js"></script>
<script src="Bootstrap/js/popper.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="Bootstrap/js/all.js"></script>

<script>
function soloNumeros(e) {
         key= e.keyCode || e.which;

         teclado= String.fromCharCode(key);

         numeros = '0123456789-';

         especiales = '8-37-38-46';

         teclado_especial = false;

         for(var i in especiales){

              if (key === especiales[i]) {
                 
                teclado_especial = true;
              }
         }

         if (numeros.indexOf(teclado)==-1 && !teclado_especial) {
           
          return false;
         }
	   }
	   
	   function soloLetras(e) {
         key2= e.keyCode || e.which;

         teclado2= String.fromCharCode(key2);

         letras = ' abcdefghijklmnñoppqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ';

         especiales2 = '8-37-38-46-164';

         teclado_especial2 = false;

         for(var i in especiales2){

              if (key2 === especiales2[i]) {
                 
                teclado_especial2 = true;break;
              }
         }

         if (letras.indexOf(teclado2)==-1 && !teclado_especial2) {
           
          return false;
         }
       }
</script>
</body>
</html>