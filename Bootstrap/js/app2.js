$(document).ready(function() {
    
    console.log('jquery 2 funciona exitosamente');
    listaUsuarios();
    var formUsuario = $('#formu-User');
    var seccionContrasena = $('#cambiarContrasena');
    var formContrasena = $('#form-contrasena');
    var mensajeRegistro = $('#mensajeRegistro');
    var mensajeEliminar = $('#mensajeEliminar');
    var seccionRegis = $('#seccRegis');
    formUsuario.hide();
    seccionContrasena.hide();
    mensajeRegistro.hide();
    mensajeEliminar.hide();
    seccionRegis.hide();
  
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
                 ${objetos.nombre} 
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

      function listaNoUsuarios() {
        
        $.ajax({
          url: 'Controladores/listaNoUsuarios.php',
          type: 'GET',
          success: function (response) {
            let noUser = JSON.parse(response);
            let plantilla = '';
            
        noUser.forEach(objetos => {
            plantilla += `<tr identificacion="${objetos.cedula}">                   
               <td>${objetos.cedula}</td>
               <td>
               ${objetos.nombre} 
               </td>
               <td>${objetos.edad}</td>
               <td>${objetos.manzana}</td>
               <td>${objetos.familia}</td>
               <td><button class="btn btn-danger" id="regisUser">
               Registrar
               </button></td>                                   
            </tr>`
        });

        $('#individual').append(plantilla);
          }
      });
      }

      // boton para llamar el formulario para registrar un nuevo usuario
      $(document).on('click', '#nuevoUser', function (e) {
        $('#listUsuarios').hide();
        listaNoUsuarios();
        formUsuario.show();
        e.preventDefault();
      });


      $(document).on('click', '#regisUser', function (e) {
        
        let elemento = $(this)[0].parentElement.parentElement;
        let cedulPersona = $(elemento).attr('identificacion');
        informacionDatos(cedulPersona);
        formUsuario.hide();
        seccionRegis.show();
        e.preventDefault();
      })


      function informacionDatos(cedula) {
        
        let buscarCedula = cedula; 
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

            $('#ciUser').val(objetos.cedula);
            $('#nombreUser').val(objetos.nombreApellido);
            $('#edadUser').val(objetos.edad);
            $('#grupoUser').val(objetos.nrofam);
            $('#manzanaUSer').val(objetos.nroManzana);            

          })

          $('#listaInformacion').html(plantilla);
        });

      }

      // funcion para registar un nuevo usuario en el sistema
      var registrarUsuario = $('#completarRegistro');
      registrarUsuario.submit(function(e) {
        
         const celIndentidad = $('#ciUser').val(),
         nombreUser = $('#nombreUser').val(),
         edadUser = $('#edadUser').val(),
         grupoUser = $('#grupoUser').val(),
         manzanaUser = $('#manzanaUSer').val(),
         tipoUser = $('#tipouser').val();

         if (tipoUser == '') {
          alert('Por seleccionar el tipo de usuario que desea registrar'); 
          e.preventDefault();
         }else{

          datosUser = {
           cedula: celIndentidad,
           nombre : nombreUser,
           edad: edadUser,
           familia : grupoUser,
           manzana : manzanaUser,
           clave : celIndentidad,
           tipo : tipoUser
          };

          $.post('Controladores/registrarUsuario.php', datosUser, function (response) {
            
            $('#SeRegistro').html(response);

          });
           seccionRegis.hide();
           mensajeRegistro.show()
          e.preventDefault();
         }        
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
        seccionContrasena.show();
        $('#ci').val(ciUsuario);
       })


     //funcion para el cambio de contraseña a todo los usuario 
     formContrasena.submit(function(e) {
        
        const contrasenaNueva = $('#pwrdNueva').val();
        const contrasenaConfirmada= $('#pwrdConfirmada').val();
   
        if (contrasenaNueva== '') {
          
          alert('Por favor Introducir la nueva contraseña');
          e.preventDefault();

        }else if (contrasenaConfirmada== '') {
          
          alert('Por favor confirmar la contraseña nueva');
          e.preventDefault();

        }else{


          if (contrasenaNueva == contrasenaConfirmada) {
               
            const datosContrasena={
                cedula: $('#ci').val(),
                Nuevapassword: contrasenaNueva,
                ConfirmPassword: contrasenaConfirmada
            };
    
            $.post('Controladores/cambioContrasena.php', datosContrasena, function(response) {
                
                alert(response);
                seccionContrasena.hide();
                formContrasena.trigger('reset');
                $('#listUsuarios').show();    
            });      
   
           }else{

            alert('La confirmacion de la nueva contraseña es incorrecta');

           }        
           e.preventDefault();

        }
     });

     // funcion que permite realizar cambio de contraseña de un usuario invitado
     const cedulaUser = $('#cedulaUser').val();
     $('#ciInvitado').val(cedulaUser);
     formuPassword = $('#formu-password');
     $('#mensaje').hide();

     formuPassword.submit(function (e) {
       
      const cedulaInvitado = $('#ciInvitado').val(),      
       Nueva = $('#claveNueva').val(),
       Confirmada= $('#claveConfirmada').val();

       if (Nueva == '') {
        
        alert('Por favor introducir una nueva contraseña');
        e.preventDefault();

       } else if (Confirmada == ''){
        
        alert('Por favor confirme su nueva contraseña');
        e.preventDefault();

       }else{

        if (Nueva == Confirmada) {
             
          const datosContrasena2={
              cedula: cedulaInvitado,
              Nuevapassword: Nueva,
              ConfirmPassword: Confirmada
          };
  
          $.post('Controladores/cambioContrasena.php', datosContrasena2, function(response) {
              
              $('#mensajeCambio').html(response);
              formuPassword.hide();
              $('#mensaje').show();
              formuPassword.trigger('reset'); 
          });      
 
         }else{

          alert('La confirmacion de la nueva contraseña es incorrecta');
           
         }        
         e.preventDefault();
       }         
     });

})