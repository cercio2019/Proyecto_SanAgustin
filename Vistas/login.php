<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href= "Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/personalizacion.css">
	<title><?php echo NOMBRESITIO; ?></title>
</head>

<body>

<div class="bg-reds text-white">
	<h1 class="p-5"><?php echo NOMBRESITIO;?></h1>
</div>

<div class="container-fluid  mt-5">
   
	<div class="row  bg-bluDark p-5">		
		<div class="col-12 p-5 text-center">              
         <h3 class="text-white ml-5">Entrar al sistema</h3>

		<?php if (isset($error)) {?>
   	        <p class="text-white ml-5"><?php echo $error; ?></p>
        <?php } ?>

		<form class="ml-1 text-white pt-2 text-center" method="POST" action="">
		<div>
			<label>usuario</label>
			 <center><input type="text" name="usuario"  class="form-control w-50 text-center "></center> 
		</div> 
		<div class="mt-3">
			<label>contraseña</label>
			<center><input type="password" name="password" class="form-control w-50 text-center"></center>
		</div>
		<div class="text-center"><input type="submit"  value="ingresar" class="btn btn-danger mt-4 w-50"></div>
	</form>

</div>
</div>
</div>
<script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="Bootstrap/js/popper.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>