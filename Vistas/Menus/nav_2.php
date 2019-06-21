<div class="btn-group ml-5 mt-1">
   <button type="button" class="btn bg-reds p-3 text-white"><a href="index.php" class="text-white">Inicio</a></button>
   
    <div class="btn-group">  
   <button type="button" class="btn bg-reds  dropdown-toggle p-3 text-white" data-toggle="dropdown">Registros</button>
   <div class="dropdown-menu bg-reds">
   <a href="index.php?action=registros" class="dropdown-item text-white bg">Familias</a>
   	<a href="index.php?action=discapacitados" class="dropdown-item text-white bg">Discapacitados</a>
     <a href="index.php?action=TerceraEdad" class="dropdown-item text-white bg">Tercera edad</a>
   </div>
  </div>  
  <button type="button" class="btn bg-reds p-3 text-white"><a href="index.php?action=Documentos" class="text-white">Documentos</a></button>
  <div class="btn-group">  
   <button type="button" class="btn bg-reds  dropdown-toggle p-3 text-white" data-toggle="dropdown">usuarios</button>
   <div class="dropdown-menu bg-reds">
   	<a href="index.php?action=modificarContrasena" class="dropdown-item text-white bg">Modificar Contraseña</a>
   	<a href="<?php echo RUTA_URL; ?>LoginUsuario/cerrarSesion.php" class="dropdown-item text-white bg">Cerrar sesion</a>
   </div>
  </div>
</div>