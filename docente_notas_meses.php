<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Notas por Mes</title>
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/docente_notas.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>



<body>

    <?php
        include('src/estados_notas_por_mes.php');
    ?>

    <?php require_once('includes/sidebar_docente.php') ?>
    <div>

        <div class="container bootstrap snippets bootdey" style="padding-top: 100px; padding-bottom: 100px;" >
            <div class="row" style="background: #FFFFFF; border-radius:20px;" > 
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <h1>Notas del Curso: <?php echo $curso['nombre'] ?> </h1>
                                <h2>Grado:</h2>
                                <h3><img src="https://img.icons8.com/color/48/000000/check-all--v1.png"/> <?php echo $grado ?> </h3>
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                <th ><span>MES</span></th>
                                                <th ><span>ESTADO</span></th>                        
                                                <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Marzo</span>
                                                    </td>
                                                    <td class="text-left" style="width: 40%;" >
                                                        <span class="label label-default"><?php echo $estadosTrimestres[0] ?></span>
                                                    </td>
                                                    <td style="width:20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Abril</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"><?php echo $estadosTrimestres[0] ?></span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Mayo</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"><?php echo $estadosTrimestres[0] ?></span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Junio</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"><?php echo $estadosTrimestres[0] ?></span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Julio</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"> <?php echo $estadosTrimestres[1] ?> </span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Agosto</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"> <?php echo $estadosTrimestres[1] ?> </span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Setiembre</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"> <?php echo $estadosTrimestres[1] ?> </span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Octubre</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"> <?php echo $estadosTrimestres[2] ?> </span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Noviembre</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"> <?php echo $estadosTrimestres[2] ?> </span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://img.icons8.com/fluency/50/000000/course-assign.png" alt=""/>                                                      
                                                        <span class="user-subhead">Diciembre</span>
                                                    </td>
                                                    <td class="text-left">
                                                        <span class="label label-default"> <?php echo $estadosTrimestres[2] ?> </span>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>

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

   