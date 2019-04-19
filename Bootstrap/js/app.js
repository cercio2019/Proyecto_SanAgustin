$(document).ready(function(){
    console.log('jquery funciona');
    listaManzanas();
    var formulario = $('#formulario');
    var tabla= $('#tabla');
    var tablaPersona = $('#tablaPersonas');
    var planilla = $('#planillaPersona');
    var planillaRegistrar = $('#form-registrar');
    tabla.hide();
    tablaPersona.hide();
    planilla.hide();
    planillaRegistrar.hide();

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

     //Mostar la tabla de familias que estan en una manazana 
    formulario.submit(function (e) {
        const idManzana = $('#manzanas').val();
              tabla.show();  
        $.post('Controladores/listFamilias.php' , {idManzana}, function (response) {
            let familias = JSON.parse(response);
            let plantilla = '';
          
              familias.forEach(objetos => {
                  plantilla += `<tr Idfamilia="${objetos.id}">
                     <td>${objetos.id}</td>
                     <td>
                      <a href="#" class="item-tarea">${objetos.familias}</a>
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
           e.preventDefault();     
     });

     //Mostar la tablas de personas que viven en la manzana
     $(document).on('click', '.verPersonas', function (e) {
          tablaPersona.show();
          tabla.hide();
          formulario.hide();
        let elemento = $(this)[0].parentElement.parentElement;
        let idFamilia = $(elemento).attr('Idfamilia');
        $.post('Controladores/listaPersonas.php', {idFamilia}, function(response) {
            
            let personas = JSON.parse(response);
            let plantilla = '';
          
              personas.forEach(objetos => {
                  plantilla += `<tr Idpersona="${objetos.id}">
                     <td>${objetos.id}</td>
                     <td>${objetos.cedula}</td>
                     <td>
                      <a href="#" class="item-tarea">${objetos.nombreApellido}</a>
                     </td>
                     <td>${objetos.edad}</td>
                     <td>
                     <button  class="btn btn-danger planilla">
                            Ver Planilla
                     </button>
                     </td>
                  </tr>`
              });
          
              $('#personas').html(plantilla); 
        });
        $('#titulo-familiar').html(`<h4>Familia nro ${idFamilia}</h4>`);
        $('#idFamiliar').val(idFamilia);
        e.preventDefault(); 
    });

    $(document).on('click', '#volver', function (e) {
     tablaPersona.hide();
     formulario.show();
     tabla.show();   
    });

    $(document).on('click', '#nuevo', function (e) {
        tablaPersona.hide();
        planillaRegistrar.show(); 
        let idFam= $('#idFamiliar').val();
        $('#familiaNRO').val(idFam);
        
    });

    // registrar los datos de una persona 
    planillaRegistrar.submit(function (e) {
      
       let fecha = $('#fecha').val();
       let edad = calcularEdad(fecha);
       let nombres = $('#nombres').val();
       let apellidos = $('#Apellidos').val();
       let nombreCompleto = `${nombres} ${apellidos}`;
        
       const datosPersonales ={
         cedula: $('#cedula').val(), 
          nombreApellido: nombreCompleto,
         fechaNac: fecha, 
          edad : edad,
         sexo : $('#edad').val(),
           tipo : $('#tipoPersona').val(),
         telefono : $('#telefono').val(), 
          correo : $('#correo').val(),
         carnet : $('#carnet').val(), 
          codigo : $('#codigo').val(),    
         serial : $('#serial').val(), 
           manzanero : $('#manzanero').val(),
         observacion : $('#observacion').val(),
          manzana : $('#manzanaNRO').val(),
         familia : $('#familaNRO').val()
        }
        
        $.post('Controladores/registroPersona.php', {datosPersonales}, function(response) {
            let personas = JSON.parse(response);
            let plantilla = '';
          
              personas.forEach(objetos => {
                  plantilla += `<tr Idpersona="${objetos.id}">
                     <td>${objetos.id}</td>
                     <td>${objetos.cedula}</td>
                     <td>
                      <a href="#" class="item-tarea">${objetos.nombreApellido}</a>
                     </td>
                     <td>${objetos.edad}</td>
                     <td>
                     <button  class="btn btn-danger planilla">
                            Ver Planilla
                     </button>
                     </td>
                  </tr>`
              });
          
              $('#personas').html(plantilla); 
        });
        planillaRegistrar.hide();
        tablaPersona.show();
        e.preventDefault();
    });

    // verificar si tiene el carnet de la patria 
    let carnetSi = $('#si-carnet');
    carnetSi.hide();
   $('#form-carnet').click(function(e) {    
        
    carnetSi.show();       
    
   e.preventDefault();
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

    // muestra una planilla con todos los datos de una persona
    $(document).on('click', '.planilla', function(e) {
        tablaPersona.hide();
        planilla.show();
        let elemento = $(this)[0].parentElement.parentElement;
        let idpersona = $(elemento).attr('Idpersona');
        $.post('Controladores/PlanillaPersona.php', {idpersona}, function(response) {
            
            let persona = JSON.parse(response);
            let plantilla = '';
            let plantilla2 = '';
          
              persona.forEach(objetos => {
                  plantilla += `<li class="m-4">ID : ${objetos.id} </li>
                  <li class="m-4">Cedula : ${objetos.cedula} </li>
                  <li class="m-4">Nombres y apellidos : ${objetos.nombreApellido} </li>
                  <li class="m-4">Nro familiar : ${objetos.nrofam} </li>
                  <li class="m-4">Edad : ${objetos.edad} </li>
                  `;
                  plantilla2 = `<li class="m-4">Sexo : ${objetos.sexo} </li>
                  <li class="m-4">Tipo de persona : ${objetos.tipoPersona} </li>
                  <li class="m-4">Manzanero : ${objetos.manzanero} </li>
                  `;
              });
             
              $('#datos1').html(plantilla); 
              $('#datos2').html(plantilla2); 
        });
        e.preventDefault(); 
    });

    $(document).on('click', '#volver2', function (e) {
        planilla.hide();
        tablaPersona.show();          
       });

})