jQuery(document).ready(function() {



});

//Función para el envío de la información del Login
jQuery("#formularioNuevosRegistro").submit(function(event) {
    var pregunta = $("#pregunta").val();
    var opcion1 = $("#opcion1").val();
    var opcion2 = $("#opcion2").val();
    var opcion3 = $("#opcion3").val(); 
    var opcion4 = $("#opcion4").val();
    var respuesta = $("#respuesta").val();

    //Validamos que el usuario mande datos en caso de que no los mande mandamos un alert diciendo que faltan datos
    if (pregunta == "" || opcion1 == "" || opcion2 == "" || opcion3 == "" || opcion4 == "" || respuesta == "") {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Favor de Ingresar los Datos Requeridos');
    } else {
            var formData = {
                pregunta: pregunta,
                opcion1: opcion1,
                opcion2: opcion2,  
                opcion3: opcion3,
                opcion4: opcion4,
                respuesta: respuesta,              
            };
            console.log(formData);
            //Mandamos la peticion AJAX al backend del login para validarlo del lado del servidor
            jQuery.ajax({
                url: '../php/subirPreguntas.php', //url del archivo que buscamos

                type: 'post', //Tipo de metodo que utilizamos para enviar la informacion
                data: formData, //Datos que ingreso el usuario
                dataType: 'json', //Tipo de dato que esperamos recibir
                //Aqui valoramos la respuesta del servidor para saber si redirigimos al dashboard o mandamos mensaje de error en las credenciales
                success: function(response) {
                    if (response.validado == 0) {
                        alertify.set('notifier', 'position', 'top-center');
                        alertify.error(response.mensaje);
                        //console.log(response);

                    } else if (response.validado == 1) {
                        alertify.set('notifier', 'position', 'top-center');
                        alertify.success(response.mensaje);
                        document.getElementById("formularioNuevosRegistro").reset();
                        console.log(response.mensaje);
                    }

                }
            });
        
    }
    event.preventDefault(); //Con está función evitamos que se recargue la página
});