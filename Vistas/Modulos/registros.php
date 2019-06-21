<div class="container mt-3 mb-4" id="ventana2">
 <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Registro de la Comunidad</h3>
        </div>
    </div>
    
      <div class="row mt-5" id="buscador">
            <div class="col-4">
            <p><strong>Buscar por Manzana</strong> </p>
            <form action=""  id="formulario">
                    <Select class="form-control" id="manzanas">
                    <option value="">Seleccionar Manzana</option>   
                   
                    </Select>
                    <button type="submit" class="btn btn-primary mt-2 w-100">
                        Buscar
                    </button>
                    </form>
                </div>

                <div class="col-4"></div>

                <div class="col-4">
                <p><strong>Buscar por Cedula</strong></p>
            <form action=""  id="formularioPersonas">
                    <div class="row">
                    <div class="col-4"><select  id="pasaporte" class="form-control">
                    <option value="">--</option>
                    <option value="V">V</option>
                    <option value="E">E</option>
                    <option value="J">J</option>
                    </select> </div>
                    <div class="col-8">
                    <input type="text" class="form-control" id="documPersonal">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-100">
                        Buscar
                    </button>
                    </form>
                </div>
      </div>
    

    <div class="row mt-5" id="tabla">
        <div class="col-12">
        <input type="hidden" id="idCuadra">
            <table class="table">
               <thead class="bg-danger text-white">
                   <th>Id</th>
                   <th>Familias nro:</th>
                   <th>Nro manzana</th>
                  
                   <th></th>
               </thead>
               <tbody id="fila" class="bg-dark text-white">

               </tbody>
            </table>
        </div>
    </div>
      </div>
 </div>


<!-- zona donde se muestra todos los datos de la persona seleccionada -->

<div class="container" id="InformPersonal">
<div class="row" >
  
<div class="col-12">

<table class="table" >

<thead class="bg-danger text-white">
<th>Datos Personales</th>
<th></th>
<th></th>
</thead>
<tbody id="cuadroinfo">

</tbody>
</table>

</div>

 </div>
</div>


 <div class="row" id="tablaPersonas">
 <div class="col-12">
     <div class="container-fluid">
        <div class="row">
          <div class="col-4">
           <button class="btn btn-primary" id="volver">Volver</button>
          </div>
          <div class="col-4" id="titulo-familiar">
         
          </div>
          <div class="col-4">
   <button class="btn btn-warning" id="nuevo">
    Nuevo Integrante
   </button>
   <input type="hidden" id="idFamiliar">
   <input type="hidden" id="idCuadrafamiliar">
   </div>
          <div class="col-12 mt-5">
          <table class="table">
      <thead class="bg-danger text-white">
      <th>ID</th>
      <th>Cedula</th>
      <th>Nombre y apellido</th>
      <th>Edad</th>
      <th></th>
      <th></th>
      </thead>
      <tbody id="personas" class="bg-dark text-white">
      
      </tbody>
      </table>
          </div>
        </div>
     </div>
 </div>
 </div>

<!---Menssaje para notificar que el registro se cumplio-->
<div class="container mt-5" id="mensajeliminado">
<input type="hidden" id="Refamiliar">
<div class="row">
<div class="col-12 text-center">
<h1 id="eliminado"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="#" class="btn btn-danger" id="mostrarTabla">Regresar</a>
</div>
</div>
</div>




 <!--zona para registrar un nuevo Integrante en la familia -->
<form action="" id="form-registrar" class="m-5">
<div class="row">
<div class="col-12">
<button class="btn btn-primary" id="regresar">Volver</button>
</div>
</div>
<div class="row mt-3">
 <div class="col-6">
 <label for="">Cedula *</label>
<div class="row">
<div class="col-4">
<select name="" id="documento" class="form-control">
<option value="">-</option>
<option value="V">V</option>
<option value="E">E</option>
<option value="J">J</option>
</select>
</div>
<div class="col-8">
<input type="text" class="form-control" id="cedula" placeholder="Ingrese Documento" onkeypress="return soloNumeros(event)" onpaste="return false">  
</div>
</div> 
 </div>
 </div>
 <div class="row mt-2">
 <div class="col-6">
    <label for="">Nombres *</label>
    <input type="text" class="form-control" id="nombres" placeholder="Ingrese Nombre"  onkeypress="return soloLetras(event)" onpaste="return false">  
 </div>
 <div class="col-6">
    <label for="">Apellidos *</label>
    <input type="text" class="form-control" id="Apellidos" placeholder="Ingrese Apellido"  onkeypress="return soloLetras(event)" onpaste="return false">  
 </div>
 </div>
 <div class="row mt-2">
 <div class="col-6">
    <label for="">Fecha de nacimiento *</label>
    <input type="date" class="form-control" id="fecha">  
 </div>
 <div class="col-6">
    <label for="">Sexo *</label>
    <select name="" id="sexo" class="form-control">
    <option value="">Seleccionar</option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
    </select>
 </div>
 </div>
 <div class="row mt-2">
 <div class="col-6">
    <label for="">Tipo persona *</label>
    <select name="" id="tipoPersona" class="form-control">
    <option value="">Seleccionar</option>
    <option value="JEFE">JEFE</option>
    <option value="MIEMBRO">MIEMBRO</option>
    </select> 
 </div>
 <div class="col-6">
    <label for="">Telefono</label>
    <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono" onkeypress="return soloNumeros(event)" onpaste="return false">  
 </div>
 </div>

 <div class="row mt-2">
 <div class="col-6">
    <label for="">Correo</label>
    <input type="email" class="form-control" id="correo" placeholder="Ingrese correo electronico">  
 </div>
 <div class="col-6">
 <label for="">¿Carnet de la patria?</label>
 <select name="" id="carnetPatria" class="form-control">
 <option value="">Seleccionar</option>
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6 mt-2">
 <label for="">¿Hogares de la patria?</label>
 <select name="" id="hogarPatria" class="form-control">
 <option value="">Seleccionar</option>
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6 mt-2">
 <label for="">¿Vivienda Propia?</label>
 <select name="" id="viviendaPropia" class="form-control">
 <option value="">Seleccionar</option>
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6 mt-2">
 <label for="">Nro de referencia de la casa</label>
 <input type="text" class="form-control" id="NroCasa" placeholder="Ingrese numero de casa" onkeypress="return soloNumeros(event)" onpaste="return false">
 </div>
 <div class="col-6 mt-2">
    <label for="">Manzanero *</label>
   <select  id="manzanero" class="form-control">
   <option value="">Seleccionar</option>
   <option value="NO">NO</option>
   <option value="SI">SI</option>
   </select> 
 </div>
 </div>
 
 <div class="row">
 <div class="col-6">
    <input type="hidden"  id="manzanaNRO">  
 </div>
 <div class="col-6">
    <input type="hidden"  id="familiaNRO">  
 </div>
 </div>
 <div class="row mt-4">
 <div class="col-12 text-center">
  <input type="submit" value="Registrar" class="btn btn-danger w-50">
 </div>
 </div>
 <p>Campos obligatorios (*)</p>
</form>

<!---Menssaje para notificar que el registro se cumplio-->
<div class="container mt-5" id="perRegistrada">
<input type="hidden" id="FAMILIAID">
<div class="row">
<div class="col-12 text-center">
<h1 id="registroExitoso"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="#" class="btn btn-danger" id="mostrarPersonas">Regresar</a>
</div>
</div>
</div>


<!-- zona donde se muestra todos los datos de la persona seleccionada -->
 <div class="row" id="planillaPersona">
  <div class="col-12">
   <div class="container">
   <div class="row">
   <div class="col-6 ml-4">
   <button class="btn btn-primary" id="volver2">Volver</button>
   </div>
   <div class="col-5">
   <input type="hidden" id="nroPersonal">
   <input type="hidden" id="regisfam">
   </div>
   </div>     
     <div class="row m-4">     
      <div class="col-12 ">
      <table class="table" >

<thead class="bg-danger text-white">
<th>Datos Personales</th>
<th></th>
<th></th>
</thead>
<tbody id="datos1">

</tbody>
</table>
      </div>
     </div>
   </div>
  </div>
 </div>

  <!--zona para editar los datos de un Integrante en la familia -->
 <div class="container" id="seccionEditar">
 <div class="row m-5">
<div class="col-6">
<button class="btn btn-primary" id="regresarPlanilla">Volver</button>
</div>
<div class="col-6">
<input type="hidden" id="PERSONAnro">
</div>
</div>
<form action="" id="form-edtitar" class="m-5">
<div class="row mt-3">
 <div class="col-6">
    <label for="">Cedula *</label>
    <input type="text" class="form-control" id="editCedula" onkeypress="return soloNumeros(event)" onpaste="return false"> 
    <input type="hidden" id="editID"> 
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
    <label for="">Nombre completo *</label>
    <input type="text" class="form-control" id="editNombres"  onkeypress="return soloLetras(event)" onpaste="return false">  
 </div>
 <div class="col-6">
    <label for="">Fecha de nacimiento *</label>
    <input type="date" class="form-control" id="editFecha">  
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
    <label for="">Sexo *</label>
    <select name="" id="editSexo" class="form-control">
    <option value="">Seleccionar</option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
    </select>
 </div>
 <div class="col-6">
    <label for="">Tipo persona *</label>
    <select name="" id="editTipoPersona" class="form-control">
    <option value="">Seleccionar</option>
    <option value="JEFE">JEFE</option>
    <option value="MIEMBRO">MIEMBRO</option>
    </select> 
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
    <label for="">Telefono</label>
    <input type="text" class="form-control" id="editTelefono" onkeypress="return soloNumeros(event)" onpaste="return false">  
 </div>
 <div class="col-6">
    <label for="">Correo</label>
    <input type="email" class="form-control" id="editCorreo">  
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
 <label for="">¿Carnet de la patria? *</label>
 <select name="" id="editCarnet" class="form-control">
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6">
 <label for="">¿Hogares de la patria? *</label>
 <select name="" id="editHogar" class="form-control">
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
 <label for="">¿Vivienda Propia? *</label>
 <select name="" id="editVivienda" class="form-control">
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6">
 <label for="">Nro de referencia de la casa *</label>
 <input type="text" class="form-control" id="editCasa" onkeypress="return soloNumeros(event)" onpaste="return false">
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
    <label for="">Manzanero *</label>
   <select  id="editManzanero" class="form-control">
   <option value="NO">NO</option>
   <option value="SI">SI</option>
   </select> 
 </div>
 </div>
 <div class="row">
 <div class="col-6">
    <input type="hidden"  id="manzanaNRO">  
 </div>
 <div class="col-6">
    <input type="hidden"  id="familiaNRO">  
 </div>
 </div>
 <div class="row mt-4">
 <div class="col-12 text-center">
  <input type="submit" value="Actualizar" class="btn btn-danger w-50">
 </div>
 </div>
 <p>Campos obligatorios (*)</p>
</form>
</div>


<!---Menssaje para notificar que la edicion de un registro se cumplio-->
<div class="container mt-5 bg-dark" id="mensajedicion">
<input type="hidden" id="idEditado">
<div class="row p-5">
<div class="col-12 text-center text-white">
<h1 id="Editado"></h1>
</div>
</div>
<div class="row mt-5">
<div class="col-12 text-center p-5">
<a href="#" class="btn btn-danger" id="PlanillaEditada">Regresar</a>
</div>
</div>
</div>