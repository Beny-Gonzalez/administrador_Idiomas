<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/umsnh_logo.png">
    <title>
        Administrador de la app
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="../img/umsnh_logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Administrador</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/dashboard.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Registrar Usuario</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../pages/tablaAlumnos.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Tabla de Alumnos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/subirPreguntas.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Subir Preguntas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="../pages/contenido.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Contenido</span>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/subirLibros.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Subir Libros</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/profile.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/sign-in.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/sign-up.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button"></a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Contenido</li>
                    </ol>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="../index.php">Salir</a>
                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <h6 class="text-white text-capitalize ps-3">Contenido</h6>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-6">

                                        <a class="btn bg-gradient-info" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Preguntas
                    </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-6">
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-6 mt-sm-0 mt-2">
                                        <a class="btn bg-gradient-warning" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Libros
                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tbody>


                                        <!--Contenido de la Tabla-->

                                        <?php                      
                      include("../php/conexion.php");
                      
                      if(!$db) 
                      {
                          $response['validado'] = 0;
                          $response['mensaje'] = 'Error!. Al conectarse a la base de datos';
                          echo json_encode($response);
                      }
                      else
                      {
                        //Realizamos la consulta a la BDD para recuperar las 4 noticias mas recientes
                        $query = "SELECT * FROM preguntas ORDER BY Id DESC;";                        
                        $tablaResultados1=consulta1($db,$query);
                        $query = "SELECT * FROM libreria ORDER BY Id DESC;";
                        $tablaResultados2=consulta2($db,$query);
                      }

                      function consulta1($db,$query){
                        $result = mysqli_query($db,$query);

                        $tablaResultados="";

                        while($datosTabla = mysqli_fetch_array($result)){                          

                          $tablaResultados.='<tr>';
                            $tablaResultados.='<td class="align-middle">';
                                $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["pregunta"].'</p>';                                                           
                            $tablaResultados.='</td>';

                            $tablaResultados.='<td class="align-middle text-center">';
                              $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["opcion1"].'</p>';                                
                            $tablaResultados.='</td>';

                            $tablaResultados.='<td class="align-middle text-center">';
                              $tablaResultados.='<span class="text-secondary text-xs font-weight-bold">'.$datosTabla["opcion2"].'</span>';                                                              
                            $tablaResultados.='</td>';

                            $tablaResultados.='<td class="align-middle text-center">';
                              $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["opcion3"].'</p>';
                            $tablaResultados.='</td>';

                            $tablaResultados.='<td class="align-middle text-center">';
                              $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["opcion4"].'</p>';
                            $tablaResultados.='</td>';

                            $tablaResultados.='<td class="align-middle text-center">';
                              $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["respuesta"].'</p>';
                            $tablaResultados.='</td>';


                            
                            

                          $tablaResultados.='</tr>';                                                      
                        }

                        return $tablaResultados;
                      }

                      function consulta2($db,$query){
                        $result = mysqli_query($db,$query);

                        $tablaResultados="";

                        while($datosTabla = mysqli_fetch_array($result)){                          

                          $tablaResultados.='<tr>';
                            $tablaResultados.='<td class="align-middle">';
                                $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["titulo"].'</p>';                                                           
                            $tablaResultados.='</td>';

                            $tablaResultados.='<td class="align-middle text-center">';
                              $tablaResultados.='<p class="text-xs font-weight-bold mb-0">'.$datosTabla["autor"].'</p>';                                
                            $tablaResultados.='</td>';                            

                          $tablaResultados.='</tr>';                                                      
                        }

                        return $tablaResultados;
                      }


                          //echo $tablaResultados                       
                  ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>





                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <h6>Pregunta</h6>
                                            </th>
                                            <th class="text-center">
                                                <h6>Opción 1</h6>
                                            </th>
                                            <th class="text-center">
                                                <h6>Opción 2</h6>
                                            </th>
                                            <th class="text-center">
                                                <h6>Opción 3</h6>
                                            </th>
                                            <th class="text-center">
                                                <h6>Opción 4</h6>
                                            </th>
                                            <th class="text-center">
                                                <h6>Respuesta</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php     
              echo $tablaResultados1;
            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <h6>Título</h6>
                                            </th>
                                            <th class="text-center">
                                                <h6>Autor</h6>
                                            </th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php     
              echo $tablaResultados2;
            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>





                        <footer class="sticky-footer">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    Departamento de Idiomas <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </footer>


                    </div>
    </main>

    <!--Seccion de Configuracion modo oscuro-->
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Configuración Administrador</h5>
                    <p>Opciones:</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Colores de la barra lateral</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Navegación lateral</h6>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Barra de navegación fija</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Claro / Oscuro</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-info w-100" href="#"></a>
                <a class="btn btn-outline-dark w-100" href="#"></a>
                <div class="w-100 text-center">
                    <a class="github-button" href="#" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Redes Sociales</h6>
                    <a href="https://twitter.com/RectoriaUMSNH" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/UniversidadMichoacanadeSanNicolasdeHidalgoOficial" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>