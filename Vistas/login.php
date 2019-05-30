<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
    <title><?php echo NOMBRESITIO; ?></title>
</head>
<body>

    <div class="container p-5">

    </div>
   
    <div class="container mt-5">
       <div class="row mt-5">
        <div class="col-12 col-md-3">

        </div>
        <div class="col-12 col-md-6  text-center bg-danger " >

            <div class="container-fluid">
                    <h3 class="mt-3 text-white">Comunidad San Agustin</h3>
        
			<?php if (isset($error)) {?>
   	        <p class="text-white text-center"><?php echo $error; ?></p>
        <?php } ?>
             <form action="" method="POST">

                <div class="row mt-5">
                    <div class="col-4">
                        <select  class="form-control" name="documento">
                            <option value="V">V</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="ingresar cedula" name="usuario">
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                            <input type="password" class="form-control mt-5" placeholder="ingresar contraseña" name="password">
                    </div>
                </div>
              
            <input type="submit" value="Ingresar" class=" btn btn-dark mt-5 mb-5 w-50 ">
            </form>

            </div>
            
        </div>
        <div class="col-12  col-md-3">
            
        </div>
       </div>
    </div>

    
<script src="Bootstrap/js/jquery-3.4.0.min.js"></script>
<script src="Bootstrap/js/popper.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


