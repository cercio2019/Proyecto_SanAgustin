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
	<div class="col-sm-12 col-md-4">
	 <div class="container text-white mt-3">
	 <h3>Sistema San Agustin</h3>
	 </div>
	</div>
	    <div class="col-sm-12 col-md-8">
      		<?php include "Menus/nav_1.php"; ?>
        </div>  
</div>
</div>

<div class="container-fluid mt-4">
<?php
$mvc = new Controller();
$mvc -> enlacesPaginasController();
?>
</div>

<div class="container-fluid bg-reds text-white fixed-bottom">
	<div class="row ">
		<div class="col-3 text-center">
			<p>Usuario: <strong> <?php echo $dato->Nombre." ".$dato->Apellido; ?></strong></p>
		</div>
		<div class="col-3 text-center">
			<p>Tipo de usuario:<strong> <?php echo $dato->tipo; ?></strong></p>
		</div>
	</div>
</div>
<script src="Bootstrap/js/app.js"></script>
<script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="Bootstrap/js/popper.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="Bootstrap/js/all.js"></script>
</body>
</html>