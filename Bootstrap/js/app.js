$(document).ready(function(){
    console.log('jquery funciona');

    var tabla= $('#tabla');
    tabla.hide();

    $('#formulario').submit(function(e) {
        e.preventDefault();
        tabla.show();
        let manzanas = $('#manzanas').val();

    if (manzanas==="Manzana nro 1") {
       let familias = 1;
        while (familias <=10) {
        $('#fila').append(`<tr><td>${familias}</td><td>Familia nro ${familias}</td></tr> `);
        familias++;
        }
        }
        
    })

})