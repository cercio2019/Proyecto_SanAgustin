<div class="row m-5">
<div class="col-12 text-center">
<h3>Registro de usuarios</h3>
</div>

<div class="col-12 mt-5" id="listUsuarios">

<div class="container">
<div class="col-6">
<button class="btn btn-dark" id="nuevoUser">
Registrar nuevo Usuario
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
<input type="text" class="form-control" id="cedulaUser">
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

</div>