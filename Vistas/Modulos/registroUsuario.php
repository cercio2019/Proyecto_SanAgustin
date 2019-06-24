<div class="row m-5">
<div class="col-12 text-center">
<h3>Registro de usuarios</h3>
</div>

<!--TABLA DE LOS USUARIOS PERTENECIENTES AL SISTEMA-->
<div class="col-12 mt-5" id="listUsuarios">

<div class="container">
<div class="row">
<div class="col-6">
<button class="btn btn-dark" id="nuevoUser">
 Nuevo Usuario <i class="fas fa-file-alt"></i>
</button>
</div>
</div>
<div class="row mt-4">
<div class="col-12">
<table class="table mt-5" id="TABLAUSER">
<thead class="bg-danger text-white">
<th>Cedula</th>
<th>Nombre y Apellido </th>
<th>tipo de usuario</th>
<th></th>
<th></th>
</thead>
<tbody id="listaUser" class="bg-dark text-white">

</tbody>
</table>
</div>
</div>
</div>
</div>

<!---Menssaje para notificar que  registro fue eliminado-->
<div class="container mt-5 bg-dark" id="mensajeEliminar">
<div class="row m-5">
<div class="col-12 text-center text-white">
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

<div class="container mt-4" >
<div class="row">
<div class="col-6">
<button class="btn btn-primary" id="regresarAlista">
<i class="fas fa-arrow-circle-left"></i>  Volver
</button>
</div>
</div>
<div class="row mt-4">
<div class="col-12">
<table class="table" id="tablaFuturoUsuario">
    <thead class="bg-danger text-white">
   <tr>
   <th>Cedula</th>
    <th>Nombre y Apellido</th>
    <th>Edad</th>
    <th>Manzana</th>
    <th>Familia</th>
    <th></th>
   </tr>
    </thead>
    <tbody id="individual" class="bg-dark text-white">
    
    
    </tbody>
</table>
</div>
</div>
</div>
</div>


<!-----Seccion para registrar o no a un usuario ---->

<div class="col-12" id="seccRegis">

<div class="container">
<div class="row">
<div class="col-12 text-center">
<h3>¿Deseas registrar a esta persona como usuario del sistema?</h3>
</div>
</div>

<form action="" id="completarRegistro">
 
<input type="hidden" id="ciUser">
<input type="hidden" id="nombreUser">
<input type="hidden" id="edadUser">
<input type="hidden" id="grupoUser">
<input type="hidden" id="manzanaUSer">

<div class="row">
<div class="col-12">
<table class="table" >

<thead class="bg-danger text-white">
<th>Datos Personales</th>
<th></th>
</thead>
<tbody id="listaInformacion">
     
</tbody>
</table>
</div>
</div>

<div class="row">
<div class="col-12">
<label for="">Seleccionar el tipo de usuario</label>
<select name="" id="tipouser" class="form-control">
<option value="">Seleccionar</option>
<option value="Administrador">Administrador</option>
<option value="Invitado">Invitado</option>
</select>
</div>
</div>
<div class="row mt-4">
<div class="col-6 text-center">
<button class="btn btn-primary w-50" id="TABLA">
cancelar
</button>
</div>
<div class="col-6 text-center">
<input type="submit" class="btn btn-danger w-50" value="Registrar">
</div>
</div>
</form>
</div>

</div>




<!---Menssaje para notificar que el registro se cumplio-->
<div class="container mt-5 bg-dark" id="mensajeRegistro">
<div class="row m-5">
<div class="col-12 text-center text-white">
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

<div class="col-12" id="cambiarContrasena">
<div class="container">
<div class="col-6">
<button class="btn btn-primary" id="returnUser">
<i class="fas fa-arrow-circle-left"></i>  Volver
</button>
</div>
</div>

<div class="container mt-4">
<form action="" id="form-contrasena">
<input type="hidden" id="ci">
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