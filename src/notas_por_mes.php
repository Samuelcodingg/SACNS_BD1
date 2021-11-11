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

    $consulta = "SELECT * FROM nota WHERE asignatura_id = $id_asignatura";
    $datosNotas = mysqli_query($conexion, $consulta);
    $notas = [];
    $notasPrimerTrimestre = [];
    $notasSegundoTrimestre = [];
    $notasTercerTrimestre = [];

    $i = 0;
    while($nota = mysqli_fetch_array($datosNotas)) {
        $notas[$i] = $nota; 
        $i++;
    }

    for($i = 0; $i < count($notas); $i++) {
        if($notas[$i]['trimestre'] == 1) {
            $notasPrimerTrimestre[$i] = $notas[$i];
        }
        else if($notas[$i]['trimestre'] == 2) {
            $notasSegundoTrimestre[$i] = $notas[$i];
        }
        else if($notas[$i]['trimestre'] == 3) {
            $notasTercerTrimestre[$i] = $notas[$i];
        }
    }

    $consulta = "SELECT COUNT(*) FROM alumno WHERE nivel_id = ".$curso['nivel_id'];
    $cantidadAlumnos = mysqli_query($conexion, $consulta);
    $cantidadAlumnos = mysqli_fetch_array($cantidadAlumnos);
    $cantidadAlumnos = (int)$cantidadAlumnos[0];

    $estadosTrimestres = ['Pendiente', 'Pendiente', 'Pendiente'];

    if(count($notasPrimerTrimestre) == $cantidadAlumnos) {
        $estadosTrimestres[0] = 'Actualizado';
    }
    else if(count($notasPrimerTrimestre) > 0) {
        $estadosTrimestres[0] = 'En Progreso';
    }

    if(count($notasSegundoTrimestre) == $cantidadAlumnos) {
        $estadosTrimestres[1] = 'Actualizado';
    }
    else if(count($notasSegundoTrimestre) > 0) {
        $estadosTrimestres[1] = 'En Progreso';
    }

    if(count($notasTercerTrimestre) == $cantidadAlumnos) {
        $estadosTrimestres[2] = 'Actualizado';
    }
    else if(count($notasTercerTrimestre) > 0) {
        $estadosTrimestres[2] = 'En Progreso';
    }
    
?>