<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="shortcut icon" href="../Imagenes/logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="assets/css/perfil.css" rel="stylesheet">
</head>

<body>
    <?php require_once('includes/sidebar_docente.php') ?>
    <div>
        <div class="contenedor">
            <div class="main-body">
                <button class="btn1"><i class='bx bxs-user-pin'></i></button>
                <button class="btn1"><i class='bx bxs-wrench'></i> </button>
                <div class="perfil">
                    <img src="..\Imagenes\profile.jpg" alt="" id="perfil">
                    <div class="texto">
                        <h2>Esthera Thompson</h2>
                        <h3>ejemplo@hotmail.com</h3>
                    </div>
                    <button class="btn"><i class='bx bxs-user-pin'></i> General</button>
                    <button class="btn"><i class='bx bxs-wrench'></i> Editar</button>
                </div>
            </div>
        </div>
        <div class="datosper">
            <div class="row">
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="red">Información Personal</h4>
                        <p>Nombre Completo:</p>
                        <p>Edad:</p>
                        <p>Teléfono:</p>
                        <p>Correo electronico:</p>
                        <p>Dirección:</p>
                        <p>DNI:</p>
                        <p>Tipo de Usuario:</p>
                    </div>
                </div>
                <div class="bio-desk">
                    <div class="panel">
                        <h4 class="terques">Datos Academicos </h4>
                        <p>Código: </p>
                        <p>Correo Institucional:</p>
                        <p>Especialidad:</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/sidebar.js"></script>

</body>