<div class="container mt-3 mb-4" id="ventana2">
 <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Registro de la Comunidad</h3>
        </div>
    </div>
    <form action="" class="mt-5" id="formulario">
      <div class="row">
            <div class="col-5">
                    <Select class="form-control" id="manzanas">
                    <option value="">Seleccionar</option>   
                   
                    </Select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
      </div>
    </form>

    <div class="row mt-3" id="tabla">
        <div class="col-12">
        <input type="hidden" id="idCuadra">
            <table class="table">
               <thead>
                   <th>Id</th>
                   <th>Familias nro:</th>
                   <th>Nro manzana</th>
               </thead>
               <tbody id="fila">

               </tbody>
            </table>
        </div>
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
      <thead>
      <th>ID</th>
      <th>Cedula</th>
      <th>Nombre y apellido</th>
      <th>Edad</th>
      <th></th>
      </thead>
      <tbody id="personas">
      
      </tbody>
      </table>
          </div>
        </div>
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
    <input type="text" class="form-control" id="cedula">  
 </div>
 </div>
 <div class="row mt-2">
 <div class="col-6">
    <label for="">Nombres *</label>
    <input type="text" class="form-control" id="nombres">  
 </div>
 <div class="col-6">
    <label for="">Apellidos *</label>
    <input type="text" class="form-control" id="Apellidos">  
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
    <input type="text" class="form-control" id="telefono">  
 </div>
 </div>

 <div class="row mt-2">
 <div class="col-6">
    <label for="">Correo</label>
    <input type="email" class="form-control" id="correo">  
 </div>
 <div class="col-6">
 <label for="">¿Carnet de la patria?</label>
 <select name="" id="carnetPatria" class="form-control">
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6">
 <label for="">¿Hogares de la patria?</label>
 <select name="" id="hogarPatria" class="form-control">
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6">
 <label for="">¿Vivienda Propia?</label>
 <select name="" id="viviendaPropia" class="form-control">
 <option value="NO">NO</option>
 <option value="SI">SI</option>
 </select>
 </div>
 <div class="col-6">
 <label for="">Nro de referencia de la casa</label>
 <input type="text" class="form-control" id="NroCasa">
 </div>
 <div class="col-6">
    <label for="">Manzanero *</label>
   <select  id="manzanero" class="form-control">
   <option value="NO">NO</option>
   <option value="SI">SI</option>
   </select> 
 </div>
 </div>
 <div class="row mt-2">
 <div class="col-6">
 <label for="">¿Discapacitado? *</label>
 <select name="" id="discapacitado" class="form-control">
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

<!-- zona donde se muestra todos los datos de la persona seleccionada -->
 <div class="row" id="planillaPersona">
  <div class="col-12">
   <div class="container">
   <div class="row">
   <div class="col-6">
   <button class="btn btn-primary" id="volver2">Volver</button>
   </div>
   <div class="col-5">
   <input type="hidden" id="nroPersonal">
   </div>
   </div>     
     <div class="row mt-3">     
      <div class="col-4 ">
          <ul id="datos1">
          
          </ul>      
      </div>
      <div class="col-4" >
          <ul id="datos2">
          
          </ul>
      </div>
      <div class="col-4" >
          <ul id="datos3">
          
          </ul>
      </div>
      <div class="col-12 m-4">
      <button class="btn btn-danger" id="editDatos">Editar</button>
      </div>
     </div>
   </div>
  </div>
 </div>

  <!--zona para editar los datos de un Integrante en la familia -->
<form action="" id="form-edtitar" class="m-5">
<div class="row">
<div class="col-12">
<button class="btn btn-primary" id="regresarPlanilla">Volver</button>
</div>
</div>
<div class="row mt-3">
 <div class="col-6">
    <label for="">Cedula *</label>
    <input type="text" class="form-control" id="editCedula"> 
    <input type="hidden" id="editID"> 
 </div>
 </div>
 <div class="row mt-3">
 <div class="col-6">
    <label for="">Nombre completo *</label>
    <input type="text" class="form-control" id="editNombres">  
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
    <input type="text" class="form-control" id="editTelefono">  
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
 <input type="text" class="form-control" id="editCasa">
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
 <div class="col-6">
    <label for="">¿Discapacidad? *</label>
   <select name="" id="editDiscapacidad" class="form-control">
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