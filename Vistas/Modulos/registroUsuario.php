<div class="row m-5">
<div class="col-12 text-center">
<h3>Registro de usuarios</h3>
</div>

<!--TABLA DE LOS USUARIOS PERTENECIENTES AL SISTEMA-->
<div class="col-12 mt-5" id="listUsuarios">

<div class="container">
<div class="col-6">
<button class="btn btn-dark" id="nuevoUser">
 Nuevo Usuario
</button>
</div>
</div>

<table class="table mt-5">
<thead class="bg-danger text-white">
<th>Cedula</th>
<th>Nombre y Apellido </th>
<th>tipo de usuario</th>
<th></th>
<th></th>
</thead>
<tbody id="listaUser">

</tbody>
</table>
</div>

<!---Menssaje para notificar que  registro fue eliminado-->
<div class="container mt-5" id="mensajeEliminar">
<div class="row">
<div class="col-12 text-center">
<h1 id="SeElimino"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="index.php?action=registroUsuario" class="btn btn-danger">Regresar</a>
</div>
</div>
</div>

<!-- formulario para registrar un nuevo usuario -->
<div class="col-12" id="formu-User">
<div class="container">
<div class="col-6">
<button class="btn btn-primary" id="volverUser">
    volver
</button>
</div>
</div>

<div class="container mt-4" >
<form action="" id="registrarUser">
<div class="row m-3">
<div class="col-6">
<label for="">Cedula</label>
<input type="text" class="form-control" id="CedulaUser">
</div>
<div class="col-6">
<label for="">Nombre</label>
<input type="text" class="form-control" id="nombreUser">
</div>
</div>
<div class="row m-3">
<div class="col-6">
<label for="">Apellido</label>
<input type="text" class="form-control" id="apellidoUser">
</div>
<div class="col-6">
<label for="">Contraseña</label>
<input type="password" class="form-control" id="contraseñaUser">
</div>
</div>
<div class="row m-3">
<div class="col-6">
<label for="">Tipo de usuario</label>
<select name="" class="form-control" id="tipoUser">
<option value="">Seleccionar</option>
<option value="Administrador">Administrador</option>
<option value="Invitado">Invitado</option>
</select>
</div>
</div>
<div class="row m-5">
<div class="col-12 text-center">
<input type="submit" value="Registrar" class="btn btn-danger w-50">
</div>
</div>
</form>
</div>
</div>

<!---Menssaje para notificar que el registro se cumplio-->
<div class="container mt-5" id="mensajeRegistro">
<div class="row">
<div class="col-12 text-center">
<h1 id="SeRegistro"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="index.php?action=registroUsuario" class="btn btn-danger">Regresar</a>
</div>
</div>
</div>

<!--FORMULARIO PARA CAMBIAR LA CONTRASEÑA DE UN USUARIO-->

<div class="col-12" id="cambiarContraseña">
<div class="container">
<div class="col-6">
<button class="btn btn-primary" id="returnUser">
    volver
</button>
</div>
</div>

<div class="container">
<form action="" id="form-contraseña">
<input type="text" id="ci">
<div class="row">
<div class="col-6">
<label for="">Contraseña Nueva</label>
<input type="password" class="form-control" placeholder="Ingresa tu nueva contraseña" id="pwrdNueva">
</div>
<div class="col-6">
<label for="">Confirmar nueva contraseña</label>
<input type="password" class="form-control" placeholder="Confirma tu nueva contraseña" id="pwrdConfirmada">
</div>
</div>
<div class="row m-4">
<div class="col-12 text-center">
<input type="submit" value="Cambiar contraseña" class="btn btn-danger w-50">
</div>
</div>
</form>
</div>
</div>

</div>