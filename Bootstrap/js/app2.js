$(document).ready(function() {
    
    console.log('jquery 2 funciona exitosamente');
    listaUsuarios();
    var formUsuario = $('#formu-User');
    var seccionContraseña = $('#cambiarContraseña');
    var formContraseña = $('#form-contraseña');
    var mensajeRegistro = $('#mensajeRegistro');
    var mensajeEliminar = $('#mensajeEliminar');
    formUsuario.hide();
    seccionContraseña.hide();
    mensajeRegistro.hide();
    mensajeEliminar.hide();
  
    //funcion de que muesta la lista de usuarios 
    function listaUsuarios() {
        $.ajax({
            url: 'Controladores/listaUsuarios.php',
            type: 'GET',
            success: function (response) {
              let users = JSON.parse(response);
              let plantilla = '';
              
          users.forEach(objetos => {
              plantilla += `<tr UserCedula="${objetos.cedula}">                   
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

      // boton para llamar el formulario para registrar un nuevo usuario
      $(document).on('click', '#nuevoUser', function (e) {
        $('#listUsuarios').hide();
        formUsuario.show();
        e.preventDefault();
      })

      // funcion para registar un nuevo usuario en el sistema
      var registrarUsuario = $('#registrarUser');
      registrarUsuario.submit(function(e) {
        
        const datosUsuarios= {
          cedula: $('#CedulaUser').val(),
          nombre: $('#nombreUser').val(),
          apellido: $('#apellidoUser').val(),
          contraseña: $('#contraseñaUser').val(),
          tipo: $('#tipoUser').val()
        };

        $.post('Controladores/registrarUsuario.php', datosUsuarios, function(response) {
         
        registrarUsuario.trigger('reset'); 
        formUsuario.hide();
        mensajeRegistro.show();
        $('#SeRegistro').html(response);
         });   
         e.preventDefault();
      })


      $(document).on('click', '#volverUser', function(e) {
        formUsuario.hide();  
        $('#listUsuarios').show();
        registrarUsuario.trigger('reset');
        e.preventDefault();
      })

      // funcion para eliminar un usuario de la base de datos
      $(document).on('click', '#eliminarUser', function (e) {
    
        if (confirm('¿Deseas eliminar este registro del sistema?')) {
         let elemento = $(this)[0].parentElement.parentElement;
         let CedulaUsuario = $(elemento).attr('UserCedula');
         $.post('Controladores/borrarUsuario.php', {CedulaUsuario}, function (response) {
          $('#listUsuarios').hide();
          mensajeEliminar.show();
          $('#SeElimino').html(response);
         });
        }
         e.preventDefault();
       });
        
       // funcion para llamar el formulario para cambiar contraseña
       $(document).on('click', '#Contraseña', function (e) {
        let elemento2 = $(this)[0].parentElement.parentElement;
        let ciUsuario = $(elemento2).attr('UserCedula');

        $('#listUsuarios').hide();
        seccionContraseña.show();
        $('#ci').val(ciUsuario);
       })


     //funcion para el cambio de contraseña a todo los usuario 
     formContraseña.submit(function(e) {
        
        let contraseñaNueva = $('#pwrdNueva').val();
        let contraseñaConfirmada= $('#pwrdConfirmada').val();
   
           if (contraseñaNueva == contraseñaConfirmada) {
               
            const datosContraseña={
                cedula: $('#ci').val(),
                Nuevapassword: contraseñaNueva,
                ConfirmPassword: contraseñaConfirmada
            };
    
            $.post('Controladores/cambioContraseña.php', datosContraseña, function(response) {
                
                alert(response);
                seccionContraseña.hide();
                formContraseña.trigger('reset');
                $('#listUsuarios').show();    
            });      
   
           }else{

            alert('La confirmacion de la nueva contraseña es incorrecta');

           }        
           e.preventDefault();
     });

     // funcion que permite realizar cambio de contraseña de un usuario invitado
     const cedulaUser = $('#cedulaUser').val();
     $('#ciInvitado').val(cedulaUser);
     formuPassword = $('#formu-password');
     $('#mensaje').hide();
     formuPassword.submit(function (e) {
       
      let cedulaInvitado = $('#ciInvitado').val();      
      let Nueva = $('#claveNueva').val();
      let Confirmada= $('#claveConfirmada').val();
 
         if (Nueva == Confirmada) {
             
          const datosContraseña2={
              cedula: cedulaInvitado,
              Nuevapassword: Nueva,
              ConfirmPassword: Confirmada
          };
  
          $.post('Controladores/cambioContraseña.php', datosContraseña2, function(response) {
              
              alert(response)
              formuPassword.hide();
              $('#mensaje').show();
              formuPassword.trigger('reset'); 
          });      
 
         }else{

          alert('La confirmacion de la nueva contraseña es incorrecta');
           
         }        
         e.preventDefault();
     })


})