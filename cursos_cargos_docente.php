<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Cursos a cargo - Docente</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/cursos_cargo.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <style type="text/css">
      .btn {
          display       : inline-block;
          font-size     : 1rem;
          padding       : .0.5rem;
      }
      .btn:hover {
          cursor: pointer;
      }
      .custom-btn {
          font-family : monospace;
          margin      : 0.5rem;
          padding-top : .0.5rem;
      }
      .vertical {
          transform: rotate(-90deg);
      }
  </style>
</head>
  <body>
    <?php require_once('includes/sidebar_docente.php') ?>
   
    <div class="container mt-5 ml-5 p-5">
      <div class="container-fluid p-0">
      <h1 class="h3">Cursos a Cargo</h1>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="card-actions float-right">
                
              </div>

              <h6 class="sub2"><img src="assets/img/chack.png" width="30" height="30" class="rounded-circle my-n1" alt="Avatar"> Numero de Cursos: 5</h6>
            </div>
            <div class="card-body">
              <table class="table table-striped" style="width:100%" style="height:100;">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Curso</th>
                    <th>Grado</th>
                    <th>Estado</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                    for($i=0; $i<5; $i++){

                      ?>
                  <tr id="lol">
                      <td><img src="assets/img/<?php echo $_SESSION['datos_usuario']['especialidad'] ?>.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                      <td> <?php echo $_SESSION['datos_usuario']['especialidad'] ?> </td>
                      <td><?php echo ($i+1) ?> Año</td>
                      <td><div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>25%</td>
                      <td> <div class="btn custom-btn vertical">
                        ...
                      </div></td>
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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/sidebar.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>