<?php
    include("conexion.php");

    //Obtenemos los datos enviados por el usuario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Validamos la conexion a la base de datos
    if(!$db) 
    {
        $response['validado'] = 0;
        $response['mensaje'] = 'Error: en la base de datos';
        echo json_encode($response);
    }
    else
    {
        //Validamos los datos
        if(empty(trim($usuario)) || empty(trim($password)) || $usuario == "" || $password == "")
        {
            $response['validado'] = 0;
            $response['mensaje'] = 'Favor de Introducir los datos';
            echo json_encode($response);
        }
        else
        {
            //Realizamos la consulta a la base de datos
            //$query = "SELECT * FROM administradorpersonal.usuarios WHERE usuarios.username = '".$username."'";
            $query = "SELECT * FROM usuariomaestro WHERE usuario='".$usuario."'";
            $result = mysqli_query($db,$query);

            //Revisamos que se pudo ejecutar la consulta
            if (!$result) 
            {
                $response['mensaje'] = "Error al intentar hacer la consulta.";
                $response['validado'] = 0;
                echo json_encode($response);
                exit;
            }
            else
            {
                //Revisamos si la consulta devolvio algun registro de coincidencia
                $rows = mysqli_num_rows($result);
                if($rows == 0)
                {
                    $response['validado'] = 0;
                    $response['mensaje'] = 'El usuario no está registrado';
                    echo json_encode($response);
                    exit; 
                }
                else
                {
                    //Validamos password
                    $resultUsuario = mysqli_fetch_all($result,MYSQLI_ASSOC);
                    //print_r ($resultUsuario[0]['nombre']);
                    //if (password_verify($password, $resultUsuario[0]['password_empleado']))
                    if ($resultUsuario[0]['password'] == $password)
                    {
                         
                        $response['validado'] = 1;
                        $response['mensaje'] = 'Inicio de seción correcto';
                        echo json_encode($response);
                        exit; 

                              
                    }
                    else
                    {
                        $response['validado'] = 0;
                        $response['mensaje'] = 'Contraseña Incorrecta';
                        echo json_encode($response);
                        exit; 
                    }
                }
            }
        }
        mysqli_close($db);
    }


?>