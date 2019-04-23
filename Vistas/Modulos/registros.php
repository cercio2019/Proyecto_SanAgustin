<div class="container mt-3 mb-4" id="ventana2">
 <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Registro de la Comunidad</h3>
        </div>
    </div>
    <form action="" class="mt-3" id="formulario">
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
        <input type="text" id="idCuadra">
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
   <input type="text" id="idCuadrafamiliar">
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
<form action="" id="form-registrar" class="mb-5">
<div class="row">
<div class="col-12">
<button class="btn btn-primary" id="regresar">Volver</button>
</div>
</div>
<div class="row mt-3">
 <div class="col-6">
    <label for="">Cedula</label>
    <input type="text" class="form-control" id="cedula">  
 </div>
 </div>
 <div class="row">
 <div class="col-6">
    <label for="">Nombres</label>
    <input type="text" class="form-control" id="nombres">  
 </div>
 <div class="col-6">
    <label for="">Apellidos</label>
    <input type="text" class="form-control" id="Apellidos">  
 </div>
 </div>
 <div class="row">
 <div class="col-6">
    <label for="">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fecha">  
 </div>
 <div class="col-6">
    <label for="">Sexo</label>
    <select name="" id="sexo" class="form-control">
    <option value="">Seleccionar</option>
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
    </select>
 </div>
 </div>
 <div class="row">
 <div class="col-6">
    <label for="">Tipo persona</label>
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

 <div class="row">
 <div class="col-6">
    <label for="">Correo</label>
    <input type="email" class="form-control" id="correo">  
 </div>
 <div class="col-6">
    <label for="">Carnet de la patria</label>
    <select  id="carnet" class="form-control">
    <option value="NO">NO</option>
    <option value="SI" id="form-carnet">SI</option>
    </select> 
 </div>
 </div>
 <div class="row" id="si-carnet">
 <div class="col-6">
    <label for="">Codigo</label>
    <input type="text" class="form-control" id="codigo">  
 </div>
 <div class="col-6">
    <label for="">Serial</label>
    <input type="text" class="form-control" id="serial">  
 </div>
 </div>
 <div class="row">
 <div class="col-6">
    <label for="">Manzanero</label>
   <select  id="manzanero" class="form-control">
   <option value="NO">NO</option>
   <option value="SI">SI</option>
   </select> 
 </div>
 <div class="col-6">
    <label for="">Observacion social</label>
    <textarea  id="observacion" cols="10" rows="5" class="form-control">
    </textarea> 
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
</form>

<!-- zona donde se muestra todos los datos de la persona seleccionada -->
 <div class="row" id="planillaPersona">
  <div class="col-12">
   <div class="container">
   <div class="row">
   <div class="col-6">
   <button class="btn btn-primary" id="volver2">Volver</button>
   </div>
   </div>     
     <div class="row mt-5">     
      <div class="col-6">
          <ul id="datos1">
          
          </ul>      
      </div>
      <div class="col-6" >
          <ul id="datos2">
          
          </ul>
      </div>
      <div class="col-12 mt-5">
      <button class="btn btn-danger" id="editDatos">Editar</button>
      </div>
     </div>
   </div>
  </div>
 </div>