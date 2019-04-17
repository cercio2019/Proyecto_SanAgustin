$(document).ready(function(){
    console.log('jquery funciona');
    listaManzanas();
    var formulario = $('#formulario');
    var tabla= $('#tabla');
    var tablaPersona = $('#tablaPersonas');
    tabla.hide();
    tablaPersona.hide();

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

     //Mostar la lista de familias que estan en una manazana 
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

     //Mostar las lista de personas que viven en la manzana
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
        e.preventDefault(); 
    });

    $(document).on('click', '#volver', function (e) {
     tablaPersona.hide();
     formulario.show();
     tabla.show();   
    })


})