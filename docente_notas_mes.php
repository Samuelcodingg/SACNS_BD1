<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina - Tabla de Notas por Mes</title>
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/docente_notas.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>



<body>

    <?php include("src/notas_por_mes.php") ?>

    <div class="sidebar">
        <div class="logo-details">
            <div id="logoprin" class='bx bxs-graduation icon' color="blue"></div>
            <div class="logo_name">E. SAN MARCOS</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list d-none" id="nav-list">
            <li>
                <a href="#" onclick="">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">Principal</span>
                </a>
                <span class="tooltip">Principal</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-notepad'></i>
                    <span class="links_name">Ingreso de Notas</span>
                </a>
                <span class="tooltip">Notas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-x-square'></i>
                    <span class="links_name">Registro de Faltas</span>
                </a>
                <span class="tooltip">Faltas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-file-find'></i>
                    <span class="links_name">Generar Observaciones</span>
                </a>
                <span class="tooltip">Observaciones</span>
            </li>
            <div id="hogar">
                <p>Tu cuenta</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bxs-wrench'></i>
                    <span class="links_name">Editar</span>
                </a>
                <span class="tooltip">Editar</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-exit'></i>
                    <span class="links_name">Salir</span>
                </a>
                <span class="tooltip">Salir</span>
            </li>
            <div id="hogar2">
                <p>Documentación</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Ayuda</span>
                </a>
                <span class="tooltip">Ayuda</span>
            </li>
        </ul>
    </div>
    <div>

        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;" >
            <div class="row" style="background: #FFFFFF; border-radius:20px;" > 
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Curso: <?php echo $curso['nombre'] ?> </h1>
                                <h2>Grado: <?php echo $grado ?> </h2>
                                <h2>Mes: <?php echo $mes ?> </h2>
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                <th ><span>MES</span></th>                                                
                                                <th class="text-center th-nota" ><span>NOTA 1</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 2</span></th>
                                                <th class="text-center th-nota" ><span>NOTA 3</span></th> 
                                                <th class="text-center th-nota" ><span>NOTA 4</span></th> 
                                                <th class="text-center th-nota" ><span>PROMEDIO</span></th>                      
                                                <th class="text-center" >&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    while($alumnos = mysqli_fetch_assoc($resultado_alumnos)){
                                                            $consulta = "SELECT * FROM nota WHERE alum_id = ".$alumnos['alum_id']." AND trimestre = $trimestre";
                                                            $resultado_notas = mysqli_query($conexion, $consulta);
                                                            $notas = mysqli_fetch_assoc($resultado_notas);
                                                        ?>
                                                            <tr>
                                                                <td>                                                     
                                                                    <span class="user-subhead"> <?php echo $alumnos['apellidos'].', '.$alumnos['nombres'] ?> </span>
                                                                </td>
                                                                <td class="text-center"; >
                                                                    <span class="label label-default"><?php echo $notas['nota'] ?></span>
                                                                </td>
                                                                <td class="text-center" >
                                                                    <span class="label label-default"><?php echo $notas['nota'] ?></span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-default"><?php echo $notas['nota'] ?></span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="label label-default"><?php echo $notas['nota'] ?></span>
                                                                </td>
                                                                <td class="text-center" style="width:20%;">
                                                                    <span class="label label-default"><?php echo $notas['nota'] ?></span>
                                                                </td>
                                                                <td >
                                                                    <a href="htt://sitioweb.com/a"><button class="btn btn-info" style="background: #4FD1C5; color: #FFFFFF;">Grabar</button></a>
                                                                </td>
                                                            </tr>

                                                        <?php
                                                    }
                                                ?>

                                                
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/sidebar.js"></script>
</body>

   