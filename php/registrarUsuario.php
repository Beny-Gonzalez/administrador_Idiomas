<?php
    include("conexion.php");
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];    
    $password = $_POST['password'];
    

    if(!$db) {
        $response['validado'] = 0;
        $response['mensaje'] = 'Error : Unable to open database';
        echo json_encode($response);
    }else {
        if(empty(trim($nombre)) || empty(trim($email)) || empty(trim($password)) || $nombre == "" || $email == "" || $password == ""){
            $response['validado'] = 0;
            $response['mensaje'] = 'Favor de Introducir los datos';
            echo json_encode($response);
        } else {                        
                $nombre = strtoupper($nombre);                                
                $query = "INSERT INTO usuariomaestro (nombre, usuario, password) VALUES ('$nombre','$email','$password')";
                $result = mysqli_query($db,$query);

                if(!$result){
                    $response['mensaje'] = "Error al intentar registrar el usuario.";
                    $response['validado'] = 0;
                    echo json_encode($response);
                    exit;
                }else{
                    $response['mensaje'] = 'Usuario Registrado Correctamente.';
                    $response['validado'] = 1;
                    echo json_encode($response);
                }            
        }
        mysqli_close($db);

    }

?>