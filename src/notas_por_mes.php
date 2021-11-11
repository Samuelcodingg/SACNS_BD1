<?php
    include("src/conexion_db.php");

    if(!isset($_GET['id'])) {
        header("Location: index.php");
    }

    $id_asignatura = $_GET['id'];
    $consulta = "SELECT * FROM asignatura WHERE asignatura_id = $id_asignatura";
    $datosCurso = mysqli_query($conexion, $consulta);
    $curso = mysqli_fetch_array($datosCurso);
    $grado = '';


    if($curso['nivel_id']=='1') {
        $grado = '1er año';
    }
    else if($curso['nivel_id']=='2') {
        $grado = '2do año';
    }
    else if($curso['nivel_id']=='3') {
        $grado = '3er año';
    }
    else if($curso['nivel_id']=='4') {
        $grado = '4to año';
    }
    else if($curso['nivel_id']=='5') {
        $grado = '5to año';
    }
?>