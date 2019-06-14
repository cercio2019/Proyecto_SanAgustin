<div class="container">

<div class="row mt-4">
<div class="col-12 text-center">
     <h3>Registro de discapacitados</h3>
</div>
</div>

<div class="container" id="seccionDiscapacitados">
<div class="row mt-5">
<div class="col-12">
<table class="table" id="tablaDiscapacitado">
     <thead>
     <th>Registro medico</th>
     <th>Cedula</th>
     <th>Nombre y Apellido</th>
     <th>Edad</th>
     <th>Tipo de discapacidad</th>
     </thead>
     <tbody id="listaDiscapacitado">
     
     </tbody>    
</table>
</div>
</div>

<div class="row mt-4 mb-4">
<div class="col-12 text-center">
<a href="PDF/Pdf2.php" target="_blank" class="btn btn-primary w-50">Descargar Registros</a>
</div>
</div>
</div>


<!---Planilla  de datos y  formulario  para completar los datos de discapacidad de una persona ---->

<div class="container m-4" id="seccionDatos">

<div class="row m-4">
<div class="col-6">
<a href="" class="btn btn-primary" id="volverDiscapacidad">volver</a>
</div>
</div>

<div class="row m-4">
<h3>Datos personales:</h3>
</div>
<div class="row ">
<div class="col-6">
<ul id="datosPersonales1">

</ul>
</div>
<div class="col-6">
<ul id="datosPersonales2">

</ul>
</div>
</div>

<form action="" id="registrosDiscapacitado" class="m-4">
<input type="text" id="numerodiscapacidad">
<div class="row">
<div class="col-4">
<label for="">tipo de Discapacidad</label>
<select name="" id="tipoDiscapacidad" class="form-control">
<option value="">Seleccionar</option>
<option value="Fisica Motora">Fisica motora</option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
</div>
<div class="col-4">
<label for="">Grado de discapacidad</label>
<select name="" id="gradoDiscapacidad" class="form-control">
<option value="">Seleccionar</option>
<option value="Leve">Leve</option>
<option value="Grave">Grave</option>
</select>
</div>
<div class="col-4">
<label for="">Carnet CONAPDIS</label>
<input type="text" class="form-control" id="CONAPDIS">
</div>
</div>
<div class="row m-5">
<div class="col-12 text-center">
<input type="submit" value="Actualizar" class="btn btn-danger w-50">
</div>
</div>
</form>
</div>


<!---Menssaje para notificar que la edicion de un registro se cumplio-->
<div class="container mt-5" id="mensajActualizacion">
<div class="row">
<div class="col-12 text-center">
<h1 id="cambiosHechos"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="" class="btn btn-danger" >Regresar</a>
</div>
</div>
</div>


</div>