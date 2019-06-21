$(document).ready(function(){
    console.log('jquery funciona');
    listaManzanas();
    listaDiscapacitados();
    listaTerceraEdad();
    var formulario = $('#formulario');
    var formularioPersonas =$('#formularioPersonas');
    var tabla= $('#tabla');
    var tablaPersona = $('#tablaPersonas');
    var planilla = $('#planillaPersona');
    var planillaRegistrar = $('#form-registrar');
    var planillaEditar = $('#form-edtitar'); 
    var seccionEditar = $('#seccionEditar'); 
    var mensajeLogro = $('#perRegistrada');
    var mensajeEliminado= $('#mensajeliminado'); 
    var mensajeEditado= $('#mensajedicion'); 
    var seccionDiscapacitados = $('#seccionDiscapacitados');
    var seccionDatos = $('#seccionDatos');
    var mensajeActualizado = $('#mensajActualizacion');
    var informPersonal= $('#InformPersonal');
    var seccionNodis = $('#seccionNoDis');
    tabla.hide();
    tablaPersona.hide();
    planilla.hide();
    planillaRegistrar.hide();
    seccionEditar.hide();
    mensajeLogro.hide();
    mensajeEliminado.hide();
    mensajeEditado.hide();
    seccionDatos.hide();
    mensajeActualizado.hide();
    informPersonal.hide();
    seccionNodis.hide();
    
    // muestra la lista de manzanas disponibles 
function listaManzanas() {        
    $.ajax({
        url: 'Controladores/listaManzanas.php',
        type: 'GET',
        success: function (response) {
          let manzanas = JSON.parse(response);
          let plantilla = '';

        manzanas.forEach(cuadra => {
         plantilla += `<option value="${cuadra.id}">${cuadra.manzana}</option>`;
        });
              $('#manzanas').append(plantilla);
        }
        });
   }
 //**  funcion para contar los integrantes de una familia 
    function contarIntegrantes(idfamiliar) {
      let nrofamiliar = idfamiliar;
      
      $.post('Controladores/contarIntegrantes.php', {nrofamiliar}, function (response) {        
       
         let conteo = JSON.parse(response);
         let contar = '';
        conteo.forEach(objetos=>{
          contar = `${objetos.cantidad}`;         
        });
     });
     
    }

  // funcion para buscar una persona a traves de la cedula de forma mas rapida
    formularioPersonas.submit(function (e) {
      
      const pasaporte = $('#pasaporte').val(),
       documenPersonal = $('#documPersonal').val();

       if (pasaporte == '') {
         alert('Introducir el tipo de documento para realizar la busqueda');
         e.preventDefault()
       }else if(documenPersonal== ''){
          alert('Introducir el numero de documento para realizar la busqueda');
          e.preventDefault();
       }else{
        
        let buscarCedula= `${pasaporte}-${documenPersonal}`;

        $.post('Controladores/buscarPorCedula.php', {buscarCedula}, function (response) {
          
          let registroDatos = JSON.parse(response);
          let plantilla ='';
          registroDatos.forEach(objetos=>{

            plantilla += `
            <tr nroID="${objetos.id} " >
              <td>

              <ul>
              <li> <strong>ID:</strong> ${objetos.id}  </li>
              <li> <strong>cedula:</strong> ${objetos.cedula} </li>
              <li> <strong>Nombre Y apellido:</strong> ${objetos.nombreApellido} </li>
              <li> <strong>Nro Familiar:</strong> ${objetos.nrofam}  </li>
              <li> <strong>Fecha de nacimiento:</strong> ${objetos.fecha} </li>
              <li> <strong>Edad:</strong> ${objetos.edad} </li>
              <li> <strong>Sexo:</strong> ${objetos.sexo} </li>
              <li> <strong>Telefono:</strong> ${objetos.telefono} </li>
              <li> <strong>Correo Electronico:</strong> ${objetos.correo}  </li>
              
              </ul>

              </td>
              <td>

              <ul>
              <li> <strong>Tipo de persona:</strong> ${objetos.tipoPersona} </li>
              <li> <strong>Carnet de la patria:</strong> ${objetos.carnet} </li>
              <li> <strong>Hogares de la Patria:</strong> ${objetos.hogar} </li>
              <li> <strong>¿Vivienda Propia:? </strong> ${objetos.vivienda} </li>
              <li> <strong>Nro Casa: </strong> ${objetos.nroCasa} </li>
              <li> <strong>¿Manzanero?:</strong> ${objetos.manzanero} </li>
              <li> <strong>Nro Manzana:</strong> ${objetos.nroManzana} </li>
              <li> <strong>¿Discapacidad?:</strong> ${objetos.discapacidad} </li>
              
              </ul>

              </td>

              <td class="bg-dark text-center">
              <button  class="btn btn-danger editarInformacion">
                            Actualizar
              </button>
              </td>

            </tr>
            `;
          })

          $('#cuadroinfo').html(plantilla);
        });
        formularioPersonas.trigger('reset');
        formulario.trigger('reset');
         informPersonal.show();
         tabla.hide();
        e.preventDefault();
       }

    });


    // metodo para llamar los datos de una persona y luego ser editados 
    $(document).on('click', '.editarInformacion', function (e) {
      
      let elemento = $(this)[0].parentElement.parentElement;
        let nroPersona = $(elemento).attr('nroID');

      $.post('Controladores/PlanillaPersona.php', {nroPersona}, function(response) {
        
        let persona = JSON.parse(response);                
          persona.forEach(objetos => {
            $('#editID').val(objetos.id),
            $('#editCedula').val(objetos.cedula); 
            $('#editNombres').val(objetos.nombreApellido);
            $('#editFecha').val(objetos.fecha);
            $('#editSexo').val(objetos.sexo);
            $('#editTipoPersona').val(objetos.tipoPersona);
            $('#editTelefono').val(objetos.telefono); 
            $('#editCorreo').val(objetos.correo); 
            $('#editCarnet').val(objetos.carnet);
            $('#editHogar').val(objetos.hogar);
            $('#editVivienda').val(objetos.vivienda);
            $('#editCasa').val(objetos.nroCasa);
            $('#editManzanero').val(objetos.manzanero);
            $('#editDiscapacidad').val(objetos.discapacidad);
            $('#PERSONAnro').val(objetos.id);

          });            
    });
    informPersonal.hide();
    $('#buscador').hide();
    seccionEditar.show();
    e.preventDefault();
   });
    

  function listaFamilias(id) {
    
      let nrocuadra = id;

    $.post('Controladores/listFamilias.php' , {nrocuadra}, function (response) {
      let familias = JSON.parse(response);
      let plantilla = '';
     
      familias.forEach(objetos => {
        
            plantilla += `<tr Idfamilia="${objetos.id}">
               <td>${objetos.id}</td>
               <td>
                ${objetos.familias}
               </td>
               <td>${objetos.nroManzana}</td>
               
               <td>
               <button  class="btn btn-danger verPersonas">
                      Ver
               </button>
               </td>
            </tr>`
        });          
        $('#fila').html(plantilla);  
        
  });
  }
  
   
     //Mostar la tabla de familias que estan en una manazana 
    formulario.submit(function (e) {
        const idManzana = $('#manzanas').val();
              tabla.show();  
              informPersonal.hide();
        listaFamilias(idManzana);

        $('#idCuadra').val(idManzana); 
        formularioPersonas.trigger('reset');
         e.preventDefault();     
     });


     // lista de personas actualizada que conforman la familia
     function listaPersonas(id) {

      let idFamiliar= id;   
      $.post('Controladores/listaPersonas.php', {idFamiliar}, function(response) {            
        let personas = JSON.parse(response);
        let plantilla = '';      
          personas.forEach(objetos => {
              plantilla += `<tr Idpersona="${objetos.id}">
                 <td>${objetos.id}</td>
                 <td>${objetos.cedula}</td>
                 <td>
                 ${objetos.nombreApellido}
                 </td>
                 <td>${objetos.edad}</td>
                 <td>
                 <button  class="btn btn-danger planilla">
                        Ver Planilla
                 </button>
                 </td>
                 <td>
                 <button  class="btn btn-warning delete">
                      Eliminar
                 </button>
                 </td>
              </tr>`
              
              $('#idCuadrafamiliar').val(objetos.famid);
          });
      
          $('#personas').html(plantilla); 
          
    });
     }


     //Mostar la tablas de personas que viven en la manzana
     $(document).on('click', '.verPersonas', function (e) {
          tablaPersona.show();
          tabla.hide();
          formulario.hide();
        let elemento = $(this)[0].parentElement.parentElement;
        let idFamilia = $(elemento).attr('Idfamilia');
        let idCuadra = $('#idCuadra').val(); 
        listaPersonas(idFamilia);
        $('#titulo-familiar').html(`<h4>Familia nro ${idFamilia}</h4>`);
        $('#idFamiliar').val(idFamilia);
        $('#idCuadrafamiliar').val(idCuadra);
        $('#buscador').hide();
        e.preventDefault(); 
    });


    // metodo para eliminar un registro de la base de datos 
    $(document).on('click', '.delete', function (e) {
      
     let idFamiliar = $('#idFamiliar').val();

     if (confirm('¿Deseas eliminar este registro del sistema?')) {
      let elemento = $(this)[0].parentElement.parentElement;
      let idpersona = $(elemento).attr('Idpersona');
      $.post('Controladores/borrarPersona.php', {idpersona}, function (response) {
        
        $('#eliminado').html(response);
       
      });
      $('#Refamiliar').val(idFamiliar);
      tablaPersona.hide();
      mensajeEliminado.show();
     }  
      e.preventDefault();
    });


    $(document).on('click', '#mostrarTabla', function (e) {
      
     let reFAMILIAR = $('#Refamiliar').val();
     listaPersonas(reFAMILIAR);
     mensajeEliminado.hide();
     tablaPersona.show();
     e.preventDefault();
    })
    
    $(document).on('click', '#volver', function (e) {
     let idManfam = $('#idCuadrafamiliar').val();
     listaFamilias(idManfam);
     tablaPersona.hide();
     $('#buscador').show();
     formulario.show();
     tabla.show();   
    });

    // te muestra el formulario para registra un nuevo integrante a la familia 
    $(document).on('click', '#nuevo', function (e) {
        tablaPersona.hide();
        planillaRegistrar.show(); 
        let idFam = $('#idFamiliar').val();
        let idMan = $('#idCuadrafamiliar').val();
        $('#familiaNRO').val(idFam);
        $('#manzanaNRO').val(idMan);      
    });


      // metodo para la busqueda de edad de una persona
      function calcularEdad(fecha) {
        let fechaNacimiento = fecha;
    
        fechaActual = new Date();    
        diaHoy = fechaActual.getDate();
        mesHoy = fechaActual.getMonth();
        anoHoy = fechaActual.getFullYear(); 
        
        fechaNacimiento = new Date(fechaNacimiento);    
        diaNacimiento = fechaNacimiento.getDate();
        mesNacimiento = fechaNacimiento.getMonth();
        anoNacimiento = fechaNacimiento.getFullYear();
    
        if (anoHoy > anoNacimiento && mesHoy > mesNacimiento) {
    
            edad = anoHoy - anoNacimiento; 
    
        }else if (anoHoy > anoNacimiento && mesNacimiento > mesHoy) {
    
            edad = anoHoy - anoNacimiento - 1; 
    
        } else  if (anoHoy > anoNacimiento ) {
            
            edad = anoHoy - anoNacimiento;
        }
        return edad;
        }

  // funcion que envia los datos de una persona por ajax para registrarlo en la base de datos
   function registrarPersona(documento, cedula, nombre, apellido, fecha, sexo, tipo, telefono, correo, carnet, hogar , vivienda, casa, manzanero,  manzana, idfamiliar3) {
          const datosPersonales ={
            cedula: `${documento}-${cedula}`, 
            nombreApellido: `${nombre} ${apellido} `,
            fechaNac: fecha, 
            edad : calcularEdad(fecha),
            sexo : sexo,
            tipo : tipo,
            telefono :telefono, 
            correo : correo,
            carnet : carnet, 
            hogarPatria: hogar,
            vivienda: vivienda,
            nroCasa: casa,  
            manzanero : manzanero,
            manzana : manzana,
            familia : idfamiliar3
           };        
           $.post('Controladores/registroPersona.php', datosPersonales, function(response) {
            $('#registroExitoso').html(response);      
           });
        }

    // registrar los datos de una persona 
    planillaRegistrar.submit(function (e) {
       
      const documento = $('#documento').val(),
      cedula = $('#cedula').val(),
      nombre = $('#nombres').val(),
      apellido = $('#Apellidos').val(),
      fecha = $('#fecha').val(),
      sexo = $('#sexo').val(),
      tipo = $('#tipoPersona').val(),
      telefono = $('#telefono').val(),
      correo = $('#correo').val(),
      carnet = $('#carnetPatria').val(),
      hogarPatria = $('#hogarPatria').val(),
      vivienda = $('#viviendaPropia').val(),
      nroCasa = $('#NroCasa').val(),
      manzanero = $('#manzanero').val(),
      manzana = $('#manzanaNRO').val(),
      idfamiliar2 = $('#familiaNRO').val();

       if (nombre==='') {
        
        alert('Por favor debes ingresar el nombre');
        $('#nombres').focus();
        e.preventDefault();

       }else if (apellido==='') {
        
        alert('Por favor debes ingresar el apellido');
        $('#Apellidos').focus();
        e.preventDefault();

       }else if (fecha==='') {
        
        alert('Por favor debes ingresar la fecha de nacimiento');
        $('#fecha').focus();
        e.preventDefault();

       }else if (sexo==='') {
        
        alert('Por favor debes seleccionar el sexo');
        $('#sexo').focus();
        e.preventDefault();

       }else if (tipo==='') {
        
        alert('Por favor debes seleccionar el tipo persona');
        $('#tipoPersona').focus();
        e.preventDefault();

       }else if (carnet==='') {
        
        alert('Por favor debes seleccionar si tienes o no carnet de la patria');
        $('#carnetPatria').focus();
        e.preventDefault();

       }else if (hogarPatria==='') {
        
        alert('Por favor debes indicar si recibes o no  beneficios de hogares de la patria');
        $('#hogarPatria').focus();
        e.preventDefault();

       }else if (vivienda==='') {
        
        alert('Por favor debes indicar si tienes o no una vivienda propia');
        $('#viviendaPropia').focus();
        e.preventDefault();

       }else if (nroCasa==='') {
        
        alert('Por favor debes ingresar el numero de la casa');
        $('#NroCasa').focus();
        e.preventDefault();

       }else if (manzanero==='') {
        
        alert('Por favor debes indicar si eres manzanero o no');
        $('#manzanero').focus();
        e.preventDefault();

       }else{       
        registrarPersona(documento, cedula, nombre, apellido, fecha, sexo, tipo, telefono, correo, carnet, hogarPatria, vivienda, nroCasa, manzanero,  manzana, idfamiliar2);
        planillaRegistrar.trigger('reset');
        planillaRegistrar.hide(); 
        mensajeLogro.show();
        $('#FAMILIAID').val(idfamiliar2);
        e.preventDefault();
        }   
    });

    $(document).on('click', '#mostrarPersonas', function(e) {
     let FAMILIAnro = $('#FAMILIAID').val(); 
     listaPersonas(FAMILIAnro);
     mensajeLogro.hide();
     tablaPersona.show();
    });

    // regresar a una ventana anterior
   $(document).on('click', '#regresar', function (e) {
    planillaRegistrar.trigger('reset');
    planillaRegistrar.hide();
    tablaPersona.show();
    e.preventDefault();
   });


   // funcion de mostrar los datos personales de cada integrante de la comunidad
   function mostrarDatosPersonales(id) {

    let idpersona = id;
    $.post('Controladores/PlanillaPersona.php', {idpersona}, function(response) {
            
      let persona = JSON.parse(response);
      let plantilla = '';
      
    
  persona.forEach(objetos => {
    plantilla += `
    <tr nroID="${objetos.id} " >
      <td>

      <ul>
      <li> <strong>ID:</strong> ${objetos.id}  </li>
      <li> <strong>cedula:</strong> ${objetos.cedula} </li>
      <li> <strong>Nombre Y apellido:</strong> ${objetos.nombreApellido} </li>
      <li> <strong>Nro Familiar:</strong> ${objetos.nrofam}  </li>
      <li> <strong>Fecha de nacimiento:</strong> ${objetos.fecha} </li>
      <li> <strong>Edad:</strong> ${objetos.edad} </li>
      <li> <strong>Sexo:</strong> ${objetos.sexo} </li>
      <li> <strong>Telefono:</strong> ${objetos.telefono} </li>
      <li> <strong>Correo Electronico:</strong> ${objetos.correo}  </li>
      
      </ul>

      </td>
      <td>

      <ul>
      <li> <strong>Tipo de persona:</strong> ${objetos.tipoPersona} </li>
      <li> <strong>Carnet de la patria:</strong> ${objetos.carnet} </li>
      <li> <strong>Hogares de la Patria:</strong> ${objetos.hogar} </li>
      <li> <strong>¿Vivienda Propia:? </strong> ${objetos.vivienda} </li>
      <li> <strong>Nro Casa: </strong> ${objetos.nroCasa} </li>
      <li> <strong>¿Manzanero?:</strong> ${objetos.manzanero} </li>
      <li> <strong>Nro Manzana:</strong> ${objetos.nroManzana} </li>
      <li> <strong>¿Discapacidad?:</strong> ${objetos.discapacidad} </li>
      
      </ul>

      </td>

      <td class="bg-dark text-center">
      <button class="btn btn-danger" id="editDatos">Editar</button>
      </td>

    </tr>
    `;

            $('#regisfam').val(objetos.nrofam)
        });
       
        $('#datos1').html(plantilla); 
  });
   }


    // muestra una planilla con todos los datos de una persona
    $(document).on('click', '.planilla', function(e) {
        tablaPersona.hide();
        planilla.show();
        let elemento = $(this)[0].parentElement.parentElement;
        let idpersona = $(elemento).attr('Idpersona');
        mostrarDatosPersonales(idpersona);
        $('#nroPersonal').val(idpersona);
        e.preventDefault(); 
    });

    $(document).on('click', '#volver2', function (e) {
       let regisfam = $('#regisfam').val();
        $('#idFamiliar').val(regisfam);
        listaPersonas(regisfam);
        planilla.hide();
        tablaPersona.show();          
       });


       // metodo para llamar los datos de una persona y luego ser editados 
    $(document).on('click', '#editDatos', function (e) {
          let nroPersona = $('#nroPersonal').val();

          $.post('Controladores/PlanillaPersona.php', {nroPersona}, function(response) {
            
            let persona = JSON.parse(response);                
              persona.forEach(objetos => {
                $('#editID').val(objetos.id),
                $('#editCedula').val(objetos.cedula); 
                $('#editNombres').val(objetos.nombreApellido);
                $('#editFecha').val(objetos.fecha);
                $('#editSexo').val(objetos.sexo);
                $('#editTipoPersona').val(objetos.tipoPersona);
                $('#editTelefono').val(objetos.telefono); 
                $('#editCorreo').val(objetos.correo); 
                $('#editCarnet').val(objetos.carnet);
                $('#editHogar').val(objetos.hogar);
                $('#editVivienda').val(objetos.vivienda);
                $('#editCasa').val(objetos.nroCasa);
                $('#editManzanero').val(objetos.manzanero);
                $('#editDiscapacidad').val(objetos.discapacidad);
                $('#PERSONAnro').val(objetos.id);
              });            
        });
        planilla.hide();
       seccionEditar.show()
        e.preventDefault();
       });

       $(document).on('click', '#regresarPlanilla', function (e) {
       planillaEditar.trigger('reset');
       let NROIDIV = $('#PERSONAnro').val();
       $('#nroPersonal').val(NROIDIV);
       mostrarDatosPersonales(NROIDIV);  
       seccionEditar.hide();
       planilla.show();
       e.preventDefault();          
       });

         // funcion para editar los datos de un integrante de la comunidad
        function editarPersona(id, cedula, nombres, fecha, sexo, tipo, telefono, correo, carnet, hogar, vivienda, casa, manzanero, discapacidad) {
          const datos ={         
            id: id,
            cedula: cedula, 
            nombre: nombres,
            fecha: fecha,
            edad: calcularEdad(fecha),
            sexo: sexo,
            tipo: tipo,
            telefono: telefono, 
            correo: correo, 
            carnet: carnet,
            hogarPatria: hogar,
            vivienda: vivienda,
            nroCasa: casa,     
            manzanero: manzanero,
            discapacidad: discapacidad
         };

         $.post('Controladores/editPersona.php', datos, function(response) {
         $('#Editado').html(response);
         });
        }

       // formulario para editar los datos de una persona
       planillaEditar.submit(function (e) {
        const idindividual = $('#editID').val(),
        Cedulaedit = $('#editCedula').val(),
        Nombresedit = $('#editNombres').val(),
        fechaedit = $('#editFecha').val(),
        Sexoedit = $('#editSexo').val(),
        Tipoedit = $('#editTipoPersona').val(),
        Telefonoedit = $('#editTelefono').val(),
        Correoedit = $('#editCorreo').val(),
        Carnetedit = $('#editCarnet').val(),
        Hogaredit = $('#editHogar').val(),
        Viviendaedit = $('#editVivienda').val(),
        Casaedit = $('#editCasa').val(),
        Manazaneroedit = $('#editManzanero').val();
     
        if(Cedulaedit==='') {
        
          alert('Por favor debes ingresar el documento de identidad');
          $('#editCedula').focus();
          e.preventDefault();
  
         }else if (Nombresedit==='') {
          
          alert('Por favor debes ingresar el nombre completo');
          $('#editNombres').focus();
          e.preventDefault();
  
         }else if (fechaedit==='') {
          
          alert('Por favor debes ingresar la fecha de nacimiento');
          $('#editFecha').focus();
          e.preventDefault();
  
         }else if (Sexoedit==='') {
          
          alert('Por favor debes ingresar la fecha de nacimiento');
          $('#editSexo').focus();
          e.preventDefault();
  
         }else if (Tipoedit==='') {
          
          alert('Por favor debes ingresar la fecha de nacimiento');
          $('#editTipoPersona').focus();
          e.preventDefault();
  
         }else if (Casaedit==='') {
          
          alert('Por favor debes ingresar el numero de referencia de la casa');
          $('#editCasa').focus();
          e.preventDefault();
  
         }else{

          editarPersona(idindividual, Cedulaedit, Nombresedit, fechaedit, Sexoedit, Tipoedit, Telefonoedit, Correoedit, Carnetedit, Hogaredit, Viviendaedit, Casaedit, Manazaneroedit);
          planillaEditar.trigger('reset'); 
          seccionEditar.hide();
          mensajeEditado.show();
          $('#idEditado').val(idindividual);
          e.preventDefault();

         }
        
       });

      $(document).on('click', '#PlanillaEditada', function (e) {
        let idEditado =  $('#idEditado').val();
        mostrarDatosPersonales(idEditado);
        $('#nroPersonal').val(idEditado);
        mensajeEditado.hide();
        planilla.show();
        e.preventDefault();
      })


// funcion que muestra la lista de discapacitados de la comunidad 
       function listaDiscapacitados() {        
        $.ajax({
            url: 'Controladores/listaDiscapacitados.php',
            type: 'GET',
            success: function (response) {
              let discapacitados = JSON.parse(response);
              let plantilla = '';
    
              discapacitados.forEach(objetos => {
                plantilla += `<tr IdDiscapacitado="${objetos.NroPersonal}"  cedulaDiscapacitado="${objetos.cedula}"  >
                   <td>${objetos.NroPersonal}</td>
                   <td>${objetos.cedula}</td>
                   <td>
                    ${objetos.nombreApellido}
                   </td>
                   <td>${objetos.edad}</td>
                   <td>${objetos.tipoDiscapacidad}</td>
                   <td>
                   <button  class="btn btn-danger planillaDiscapacidad">
                          Ver Planilla
                   </button>
                   </td>
                   <td>
                   <button  class="btn btn-warning deleteDiscapacitado">
                          Eliminar 
                   </button>
                   </td>
                </tr>`
            });
                  $('#listaDiscapacitado').append(plantilla);
            }
            });
        } 


        $(document).on('click', '.planillaDiscapacidad', function(e) {
          
        let elemento = $(this)[0].parentElement.parentElement;
        let iddiscapacidad = $(elemento).attr('IdDiscapacitado');
        datosDiscapacitados(iddiscapacidad);
        $('#numerodiscapacidad').val(iddiscapacidad);
        seccionDiscapacitados.hide();
        seccionDatos.show();
        e.preventDefault(); 

        })

        
        var eliminarDiscapacitado = $('#eliminarMensaje');
        eliminarDiscapacitado.hide();

        $(document).on('click', '.deleteDiscapacitado', function (e) {
          
          if (confirm('¿Deseas eliminar este registro del sistema?')) {
           let elemento = $(this)[0].parentElement.parentElement;
           let cedulaDiscapacitado = $(elemento).attr('cedulaDiscapacitado');
           $.post('Controladores/borrarDiscapacitado.php', {cedulaDiscapacitado}, function (response) {
             
             $('#eliminadoDiscapacitado').html(response);
            
           });
            seccionDiscapacitados.hide();
            eliminarDiscapacitado.show();
          }  
           e.preventDefault();
        })

        function datosDiscapacitados(id) {
          let NROdiscapacitado = id;
        $.post('Controladores/datosDiscapacitados.php', {NROdiscapacitado}, function (response) {
          
          let datosDiscapacitados = JSON.parse(response);
          let plantilla = '';
          let plantilla2 = '';

           datosDiscapacitados.forEach(objetos => {
            plantilla = `<li class="m-4">Cedula : ${objetos.cedula} </li>
            <li class="m-4">Nombres y apellidos : ${objetos.nombreApellido} </li>
            `;

            plantilla2 =`<li class="m-4">Fecha de nacimiento : ${objetos.fecha} </li>
            <li class="m-4">Edad : ${objetos.edad} </li>
            `;
            
            $('#tipoDiscapacidad').val(`${objetos.tipo}`);
            $('#gradoDiscapacidad').val(`${objetos.grado}`);
            $('#CONAPDIS').val(`${objetos.carnet}`);
           });

           $('#datosPersonales1').append(plantilla);
           $('#datosPersonales2').append(plantilla2);

        })

        }

      // funcion para actualizar los datos de discapacidad de una persona 
       var registrosDiscapacitado = $('#registrosDiscapacitado');

       registrosDiscapacitado.submit(function(e) {
        
        datePerson = {
          id : $('#numerodiscapacidad').val(),
          tipo :  $('#tipoDiscapacidad').val(),
          grado: $('#gradoDiscapacidad').val(),
          carnet: $('#CONAPDIS').val()
        }

        $.post('Controladores/actualizarDiscapacitado.php', datePerson, function(response) {
          $('#cambiosHechos').html(response);
        });

        seccionDatos.hide();
         mensajeActualizado.show();
         e.preventDefault();
       })

      $(document).on('click', '#newDiscapacitado', function (e) {
        
       listaNoDiscapacitados();
       seccionDiscapacitados.hide();
       seccionNodis.show();
       e.preventDefault();
      })


       function listaNoDiscapacitados() {        
        $.ajax({
          url: 'Controladores/listaNoDiscapacitados.php',
          type: 'GET',
          success: function (response) {
            let noDiscpacitados = JSON.parse(response);
            let plantilla = '';
            
        noDiscpacitados.forEach(objetos => {
            plantilla += `<tr identCed="${objetos.cedula}">                   
               <td>${objetos.cedula}</td>
               <td>
               ${objetos.nombre} 
               </td>
               <td>${objetos.edad}</td>
               <td>${objetos.manzana}</td>
               <td>${objetos.familia}</td>
               <td><button class="btn btn-danger" id="regisDisca">
               Registrar
               </button></td>                                   
            </tr>`
        });

        $('#individual2').append(plantilla);
          }
      });

       }

       var seccionREGIS = $('#regisDISCPACIDAD');
       seccionREGIS.hide();
       var completarDiscapacidad = $('#completarDiscapacidad');
       $('#mensajeExito').hide();


       $(document).on('click', '#returnDisca', function (e) {
        seccionDiscapacitados.show();
        seccionNodis.hide();
        e.preventDefault();
       })

       $(document).on('click', '#regisDisca', function (e) {
        let elemento = $(this)[0].parentElement.parentElement;
        let buscarCedula = $(elemento).attr('identCed');

        $.post('Controladores/buscarPorCedula.php', {buscarCedula}, function (response) {
          
          let registroDatos = JSON.parse(response);
          let plantilla ='';
          registroDatos.forEach(objetos=>{

            plantilla += `
            <tr nroID="${objetos.id} " >
              <td>

              <ul>
              <li> <strong>ID:</strong> ${objetos.id}  </li>
              <li> <strong>cedula:</strong> ${objetos.cedula} </li>
              <li> <strong>Nombre Y apellido:</strong> ${objetos.nombreApellido} </li>
              <li> <strong>Nro Familiar:</strong> ${objetos.nrofam}  </li>
              <li> <strong>Fecha de nacimiento:</strong> ${objetos.fecha} </li>
              <li> <strong>Edad:</strong> ${objetos.edad} </li>
              <li> <strong>Sexo:</strong> ${objetos.sexo} </li>
              <li> <strong>Telefono:</strong> ${objetos.telefono} </li>
              <li> <strong>Correo Electronico:</strong> ${objetos.correo}  </li>
              
              </ul>

              </td>
              <td>

              <ul>
              <li> <strong>Tipo de persona:</strong> ${objetos.tipoPersona} </li>
              <li> <strong>Carnet de la patria:</strong> ${objetos.carnet} </li>
              <li> <strong>Hogares de la Patria:</strong> ${objetos.hogar} </li>
              <li> <strong>¿Vivienda Propia:? </strong> ${objetos.vivienda} </li>
              <li> <strong>Nro Casa: </strong> ${objetos.nroCasa} </li>
              <li> <strong>¿Manzanero?:</strong> ${objetos.manzanero} </li>
              <li> <strong>Nro Manzana:</strong> ${objetos.nroManzana} </li>
              <li> <strong>¿Discapacidad?:</strong> ${objetos.discapacidad} </li>
              
              </ul>

              </td>

            </tr>
            `;
            $('#ciDisca').val(objetos.cedula);
            $('#nombreDisca').val(objetos.nombreApellido);
            $('#fechaDisca').val(objetos.fecha);
            $('#edadDisca').val(objetos.edad);
            $('#grupoDisca').val(objetos.nrofam);
            $('#manzanaDisca').val(objetos.nroManzana)
          })
          $('#inforPersonal').html(plantilla);
        });
        seccionNodis.hide();
        seccionREGIS.show();
        e.preventDefault();

       });

       completarDiscapacidad.submit(function (e) {
         
       const ciDisca = $('#ciDisca').val(),
          nombreDisca = $('#nombreDisca').val(),
          edadDisca = $('#edadDisca').val(),
          fechaDisca = $('#fechaDisca').val(), 
          grupoDisca = $('#grupoDisca').val(),
          manzanaDisca = $('#manzanaDisca').val();
         
          const datosDiscapacidad = {
           cedula: ciDisca,
           nombre: nombreDisca,
           fecha: fechaDisca,
           edad: edadDisca,
           familia: grupoDisca,
           manzana: manzanaDisca
          };

          $.post('Controladores/registrarDiscapacitado.php', datosDiscapacidad, function (response) {
            $('#registroCompletado').html(response);
          });
          seccionREGIS.hide();
          $('#mensajeExito').show();
          e.preventDefault();
       });

       $(document).on('click', '#TABLA', function (e) {
         
         seccionREGIS.hide();
         seccionNodis.show();
         e.preventDefault();
       });

        
        //funcion de que muesta la lista de personas de la tercera edad
        function listaTerceraEdad() {
          $.ajax({
              url: 'Controladores/listaTerceraEdad.php',
              type: 'GET',
              success: function (response) {
                let mayores = JSON.parse(response);
                let plantilla = '';
                
              mayores.forEach(objetos => {
                plantilla += `<tr IdDiscapacitado="${objetos.id}">
                   <td>${objetos.id}</td>
                   <td>${objetos.cedula}</td>
                   <td>
                   ${objetos.nombreApellido}
                   </td>
                   <td>${objetos.edad}</td>                   
                   <td>${objetos.familia}</td>
                   <td>${objetos.manzana}</td>

                </tr>`
            });

            $('#listaMayores').append(plantilla);
              }
          });
        }
      
})