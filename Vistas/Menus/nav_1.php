<div class="btn-group ml-5 mt-1">
   <button type="button" class="btn bg-reds p-3 text-white"><a href="index.php" class="text-white">Inicio</a></button>
    <button type="button" class="btn bg-reds p-3 text-white "><a href="index.php?action=pacientes" class="text-white">Registros</a></button>
  <div class="btn-group">
   <button type="button" class="btn bg-reds  dropdown-toggle p-3 text-white" data-toggle="dropdown">usuarios</button>
   <div class="dropdown-menu bg-reds">
   	<a href="index.php?action=registroUsuario" class="dropdown-item text-white bg">Registrar usuarios</a>
   	<a href="<?php echo RUTA_URL; ?>LoginUsuario/cerrarSesion.php" class="dropdown-item text-white bg">Cerrar sesion</a>
   </div>
  </div>

</div>