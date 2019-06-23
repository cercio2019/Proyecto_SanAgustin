<div class="container">

<div class="row mt-4">
<div class="col-12 text-center">
     <h3>Registro de discapacitados</h3>
</div>
</div>

<div class="container" id="seccionDiscapacitados">
<div class="row">
<div class="col-6">
<button class="btn btn-dark" id="newDiscapacitado">
Nuevo registro <i class="fas fa-file-alt"></i>
</button>
</div>
</div>
<div class="row mt-5">
<div class="col-12">
<table class="table" id="tablaDiscapacitado">
     <thead class="bg-danger text-white text-center">
     <th>Id </th>
     <th>Cedula</th>
     <th>Nombre y Apellido</th>
     <th>Edad</th>
     <th>Tipo de discapacidad</th>
     <th></th>
     <th></th>
     </thead>
     <tbody id="listaDiscapacitado" class="bg-dark text-white text-center">
     
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


<!---Menssaje para notificar que un registro de discapacidad se cumplio-->
<div class="container mt-5" id="eliminarMensaje">
<div class="row">
<div class="col-12 text-center">
<h1 id="eliminadoDiscapacitado"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="index.php?action=discapacitados" class="btn btn-danger" >Regresar</a>
</div>
</div>
</div>


<!-- formulario para registrar un nuevo usuario -->
<div class="col-12" id="seccionNoDis">

<div class="container mt-4" >
<div class="row">
<div class="col-6">
<button class="btn btn-primary" id="returnDisca">
<i class="fas fa-arrow-circle-left"></i>  Volver
</button>
</div>
</div>
<div class="row mt-4 mb-5">
<div class="col-12">
<table class="table" id="tablafuturoDisc">
    <thead class="bg-danger text-white text-center">
    <tr>
   <th>Cedula</th>
    <th>Nombre y Apellido</th>
    <th>Edad</th>
    <th>Manzana</th>
    <th>Familia</th>
    <th></th>
   </tr>
    </thead>
    <tbody id="individual2" class="bg-dark text-white text-center">
    
    
    </tbody>
</table>
</div>
</div>
</div>
</div>



<!-----Seccion para registrar o no a un usuario ---->

<div class="col-12" id="regisDISCPACIDAD">

<div class="container">
<div class="row">
<div class="col-12 text-center">
<h3>¿Deseas registrar a esta persona como persona discapacitada?</h3>
</div>
</div>

<form action="" id="completarDiscapacidad" class="mb-5">
 
<input type="hidden" id="ciDisca">
<input type="hidden" id="nombreDisca">
<input type="hidden" id="fechaDisca">
<input type="hidden" id="edadDisca">
<input type="hidden" id="grupoDisca">
<input type="hidden" id="manzanaDisca">

<div class="row">
<div class="col-12">
<table class="table" >

<thead class="bg-danger text-white">
<th>Datos Personales</th>
<th></th>
</thead>
<tbody id="inforPersonal">
     
</tbody>
</table>
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


<!---Menssaje para notificar que un registro de discapacidad se cumplio-->
<div class="container mt-5" id="mensajeExito">
<div class="row">
<div class="col-12 text-center">
<h1 id="registroCompletado"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="index.php?action=discapacitados" class="btn btn-danger" >Regresar</a>
</div>
</div>
</div>


<!---Planilla  de datos y  formulario  para completar los datos de discapacidad de una persona ---->

<div class="container m-4" id="seccionDatos">

<div class="row m-4">
<div class="col-6">
<a href="" class="btn btn-primary" id="volverDiscapacidad"> <i class="fas fa-arrow-circle-left"></i>  Volver</a>
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
<input type="hidden" id="numerodiscapacidad">
<div class="row">
<div class="col-4">
<label for="">tipo de Discapacidad</label>
<select name="" id="tipoDiscapacidad" class="form-control">
<option value="">Seleccionar</option>
<option value="Fisica Motora">Fisica motora</option>
<option value="Discapacidad Sensorial">Discapacidad Sensorial</option>
<option value="Discapacidad Intelectual">Discapacidad Intelectual</option>
<option value="Discapacidad Psiquica">Discapacidad Psiquica</option>
<option value="Viseral">Viseral</option>
<option value="Multiple">Multiple</option>
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