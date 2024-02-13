
jQuery(document).ready(function () 
{
    
    

});

//Función para el envío de la información del Login
jQuery("#formularioLogin").submit(function (event) 
{
    var usuario = $("#usuario").val();
    var password = $("#password").val();
    //Validamos que el usuario mande datos en caso de que no los mande mandamos un alert diciendo que faltan datos
    if(usuario == "" || password == "")
    {
        alertify.set('notifier','position', 'top-center');
        alertify.error('Favor de Ingresar los Datos Requeridos');
    }
    else
    {
        //alertify.set('notifier','position', 'top-center');
        //alertify.success('Datos Correctos');
        //Creamos el formData con la informacion que ingreso el usuario
        var formData = 
        {
            usuario: usuario,
            password: password,
        };
        console.log(formData);
        //Mandamos la peticion AJAX al backend del login para validarlo del lado del servidor
        jQuery.ajax({
          url: 'php/login.php',//url del archivo que buscamos
          type: 'post', //Tipo de metodo que utilizamos para enviar la informacion
          data: formData, //Datos que ingreso el usuario
          dataType: 'json',//Tipo de dato que esperamos recibir
          //Aqui valoramos la respuesta del servidor para saber si redirigimos al dashboard o mandamos mensaje de error en las credenciales
          success: function(response){
            //console.log(response);
            if(response.validado == 0)
            {
                alertify.set('notifier','position', 'top-center');
                alertify.error(response.mensaje);
                console.log(response);
                
            }
            else if(response.validado == 1)
            {
                alertify.set('notifier','position', 'top-center');
                alertify.success(response.mensaje);
                window.location.href = "pages/dashboard.php";
                //console.log(response); 
            }

          }
        });
    }
    event.preventDefault();//Con está función evitamos que se recargue la página
});

