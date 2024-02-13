<?php
    include("conexion.php");
    $pregunta = $_POST['pregunta'];
    $opcion1 = $_POST['opcion1'];    
    $opcion2 = $_POST['opcion2'];
    $opcion3 = $_POST['opcion3'];
    $opcion4 = $_POST['opcion4'];
    $respuesta = $_POST['respuesta'];
    

    if(!$db) {
        $response['validado'] = 0;
        $response['mensaje'] = 'Error : Unable to open database';
        echo json_encode($response);
    }else {
        if(empty(trim($pregunta)) || empty(trim($opcion1)) || empty(trim($opcion2)) || empty(trim($opcion3)) || empty(trim($opcion4)) || empty(trim($respuesta)) || $pregunta == "" || $opcion1 == "" || $opcion2 == "" || $opcion3 == "" || $opcion4 == "" || $respuesta == ""){
            $response['validado'] = 0;
            $response['mensaje'] = 'Favor de Introducir los datos';
            echo json_encode($response);
        } else {                        
                $pregunta = Converir_cadena($pregunta); 
                $opcion1 = Converir_cadena($opcion1); 
                $opcion2 = Converir_cadena($opcion2); 
                $opcion3 = Converir_cadena($opcion3); 
                $opcion4 = Converir_cadena($opcion4);  
                $respuesta = Converir_cadena($respuesta);  
                                
                $query = "INSERT INTO preguntas (pregunta, opcion1, opcion2, opcion3, opcion4, respuesta) VALUES ('$pregunta','$opcion1','$opcion2', '$opcion3', '$opcion4', '$respuesta')";
                $result = mysqli_query($db,$query);

                if(!$result){
                    $response['mensaje'] = "Error al intentar registrar pregunta.";
                    $response['validado'] = 0;
                    echo json_encode($response);
                    exit;
                }else{
                    $response['mensaje'] = 'Pregunta Registrada Correctamente.';
                    $response['validado'] = 1;
                    echo json_encode($response);
                }            
        }
        mysqli_close($db);

    }


function Converir_cadena($cadena){    
    $texto = strtolower($cadena);
    $texto2 = ucfirst($texto);
    return $texto2;
}

?>