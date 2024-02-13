<?php
    include("conexion.php");
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];    
    $urlImagen = $_POST['urlImagen'];
    $urlPdf = $_POST['urlPdf'];
    
    if(!$db) {
        $response['validado'] = 0;
        $response['mensaje'] = 'Error : Unable to open database';
        echo json_encode($response);
    }else {
        if(empty(trim($titulo)) || empty(trim($autor)) || empty(trim($urlImagen)) || empty(trim($urlPdf)) || $titulo == "" || $autor == "" || $urlImagen == "" || $urlPdf == ""){
            $response['validado'] = 0;
            $response['mensaje'] = 'Favor de Introducir los datos';
            echo json_encode($response);
        } else {                        
                $titulo = Converir_cadena($titulo); 
                $autor = Converir_cadena($autor);               
                                
                $query = "INSERT INTO libreria (titulo, autor, urlImagen, urlPdf) VALUES ('$titulo','$autor','$urlImagen', '$urlPdf')";
                $result = mysqli_query($db,$query);

                if(!$result){
                    $response['mensaje'] = "Error al intentar registrar el libro.";
                    $response['validado'] = 0;
                    echo json_encode($response);
                    exit;
                }else{
                    $response['mensaje'] = 'Libro Registrado Correctamente.';
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