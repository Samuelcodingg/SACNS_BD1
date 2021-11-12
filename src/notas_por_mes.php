<?php
    include("src/conexion_db.php");
    
    if(!isset($_GET['id_curso']) || !isset($_GET['id_mes'])) {
        header('Location: index.php');
    }

    $id_curso = $_GET['id_curso'];
    $id_mes = $_GET['id_mes'];
    $trimestre = '';

    if($id_mes == 1 || $id_mes == 2 || $id_mes == 3 || $id_mes == 4) {
        $trimestre = '1';
    } 
    else if($id_mes == 5 || $id_mes == 6 || $id_mes == 7) {
        $trimestre = '2';
    } 
    else if($id_mes == 8 || $id_mes == 9 || $id_mes == 10) {
        $trimestre = '4';
    }

    $consulta = "SELECT * FROM asignatura WHERE asignatura_id = $id_curso";
    $resultado = mysqli_query($conexion, $consulta);
    $curso = mysqli_fetch_array($resultado);
    $grado = '';
    $mes = '';

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

    if($id_mes == '1') {
        $mes = 'Marzo';
    }
    else if($id_mes == '2'){
        $mes = 'Abril';
    }
    else if($id_mes == '3'){
        $mes = 'Mayo';
    }
    else if($id_mes == '4'){
        $mes = 'Junio';
    }
    else if($id_mes == '5'){
        $mes = 'Julio';
    }
    else if($id_mes == '6'){
        $mes = 'Agosto';
    }
    else if($id_mes == '7'){
        $mes = 'Septiembre';
    }
    else if($id_mes == '8'){
        $mes = 'Octubre';
    }
    else if($id_mes == '9'){
        $mes = 'Noviembre';
    }
    else if($id_mes == '10'){
        $mes = 'Diciembre';
    }

    $consulta = "SELECT * FROM alumno WHERE alum_id IN (SELECT alum_id FROM asignatura_alumno WHERE asignatura_id = $id_curso)";
    $resultado_alumnos = mysqli_query($conexion, $consulta);
    




?>