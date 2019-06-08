$(document).ready(function() {
    
    console.log('jquery 2 funciona exitosamente');
    listaUsuarios();
    var formUsuario = $('#formu-User');
    var seccionContraseña = $('#cambiarContraseña');
    var formContraseña = $('#form-contraseña');
    formUsuario.hide();
    seccionContraseña.hide();

    //funcion de que muesta la lista de usuarios 
    function listaUsuarios() {
        $.ajax({
            url: 'Controladores/listaUsuarios.php',
            type: 'GET',
            success: function (response) {
              let users = JSON.parse(response);
              let plantilla = '';
              
          users.forEach(objetos => {
              plantilla += `<tr cedulaUser="${objetos.cedula}" >                   
                 <td>${objetos.cedula}</td>
                 <td>
                 ${objetos.nombre} ${objetos.apellido} 
                 </td>
                 <td>${objetos.tipo}</td>
                 <td><button class="btn btn-primary" id="Contraseña">
                 Contraseña
                 </button></td>
                 <td><button class="btn btn-danger" id="eliminarUser">
                 Eliminar
                 </button></td>                                   
              </tr>`
          });

          $('#listaUser').append(plantilla);
            }
        });
      }

      $(document).on('click', '#nuevoUser', function (e) {
        $('#listUsuarios').hide();
        formUsuario.show();
        e.preventDefault();
      })

      // funcion para registar un nuevo usuario en el sistema
      var registrarUsuario = $('#registrarUser');
      registrarUsuario.submit(function(e) {
        
        const datosUsuarios= {
          cedula: $('#cedulaUser').val(),
          nombre: $('#nombreUser').val(),
          apellido: $('#apellidoUser').val(),
          contraseña: $('#contraseñaUser').val(),
          tipo: $('#tipoUser').val()
        };

        $.post('Controladores/registrarUsuario.php', datosUsuarios, function(response) {
         
          registrarUsuario.trigger('reset'); 
          listaUsuarios();
          alert(response);
          
         });
        
         formUsuario.hide();
         $('#listUsuarios').show();
         e.preventDefault();
      })


      $(document).on('click', '#volverUser', function(e) {
        formUsuario.hide();  
        $('#listUsuarios').show();
        registrarUsuario.trigger('reset');
        e.preventDefault();
      })

      $(document).on('click', '#eliminarUser', function (e) {
    
        if (confirm('¿Deseas eliminar este registro del sistema?')) {
         let elemento = $(this)[0].parentElement.parentElement;
         let cedulaUsuario = $(elemento).attr('cedulaUser');
         $.post('Controladores/borrarUsuario.php', {cedulaUsuario}, function (response) {
           alert(response);
           listaUsuarios();
         });
        }
         e.preventDefault();
       });

       $(document).on('click', '#Contraseña', function (e) {
        let elemento = $(this)[0].parentElement.parentElement;
        let ciUsuario = $(elemento).attr('cedulaUser');

        $('#listUsuarios').hide();
        seccionContraseña.show();
        $('#ci').val(ciUsuario);
       })

     //funcion para el cambio de contraseña de un usuario
     formContraseña.submit(function(e) {
        

        let contraseñaNueva = $('#pwrdNueva').val();
        let contraseñaConfirmada= $('#pwrdConfirmada').val();
   
           if (contraseñaNueva == contraseñaConfirmada) {
               
            const datosContraseña={
                cedula: $('#ci').val(),
                contraseñaActual: $('#pwrdActual').val(),
                Nuevapassword: contraseñaNueva,
                ConfirmPassword: contraseñaConfirmada
            };
    
            $.post('Controladores/cambioContraseña.php', datosContraseña, function(response) {
               
             if (response = 'falta') {
                 
               alert('La contraseña actual de este usuario es incorrecta');
    
             }else{    
                alert(response);
                seccionContraseña.hide();
                formContraseña.trigger('reset');
                $('#listUsuarios').show();
             } 
    
            });      
   
           }else{

            alert('La confirmacion de la nueva contraseña es incorrecta');

           }        
           e.preventDefault();
     });


})