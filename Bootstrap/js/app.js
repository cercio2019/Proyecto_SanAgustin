$(document).ready(function(){
    console.log('jquery funciona');
    listaManzanas();
    var tabla= $('#tabla');
    tabla.hide();

function listaManzanas() {        
    $.ajax({
        url: 'Controladores/listaManzanas.php',
        type: 'GET',
        success: function (response) {
          let manzanas = JSON.parse(response);
          let plantilla = '';

        manzanas.forEach(cuadra => {
         plantilla += `<option value="${cuadra.IdManzana}">${cuadra.manzana}</option>`;
        });
              $('#manzanas').append(plantilla);
        }

        });
    }

    $('#formulario').submit(function(e) {
        e.preventDefault();
        tabla.show();
        let manzanas2 = $('#manzanas').val();       
    });

})