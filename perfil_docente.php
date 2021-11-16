<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/perfil.css" rel="stylesheet">
</head>

<body>
    <?php require_once('src/info_perfil_docente.php') ?>
    <?php require_once('includes/sidebar_docente.php') ?>
    <div>
        <div class="contenedor">
            <div class="main-body">
                <button class="btn1"><i class='bx bxs-user-pin'></i></button>
                <button class="btn1"><i class='bx bxs-wrench'></i> </button>
                <div class="perfil">
                    <img src="assets/img/admin_prueba.png" alt="" id="perfil">
                    <div class="texto">
                        <h2> <?php echo $_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'] ?> </h2>
                        <h3> <?php echo $_SESSION['datos_usuario']['email'] ?> </h3>
                    </div>
                    <a href="perfil_docente.php" class="btn d-flex align-items-center"><i class='bx bxs-user-pin'></i> General  </a>
                    <a href="editar_perfil_docente.php" class="btn d-flex align-items-center"><i class='bx bxs-wrench'></i> Editar</a>
                </div>
            </div>
        </div>
        <div class="datosper">
            <div class="row">
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="red">Información Personal</h4>
                        <p>Nombre Completo: <?php echo $_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'] ?> </p>
                        <p>Edad: <?php echo $_SESSION['datos_usuario']['edad'] ?> </p>
                        <p>Teléfono: <?php echo $_SESSION['datos_usuario']['celular'] ?> </p>
                        <p>Correo electronico: <?php echo $_SESSION['datos_usuario']['email'] ?> </p>
                        <p>Dirección:  <?php echo $_SESSION['datos_usuario']['direccion'] ?> </p>
                        <p>DNI: <?php echo $_SESSION['datos_usuario']['dni'] ?> </p>
                        <p>Tipo de Usuario: Docente</p>
                    </div>
                </div>
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="terques">Datos Academicos </h4>
                        <p>Código: <?php echo $_SESSION['datos_usuario']['docente_id'] ?> </p>
                        <p>Correo Institucional: <?php echo $_SESSION['datos_usuario']['correo_insti'] ?> </p>
                        <p>Especialidad: <?php echo $_SESSION['datos_usuario']['especialidad'] ?> </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/sidebar.js"></script>

</body>