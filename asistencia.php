<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Asistencia</title>
  <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="assets/css/asistencia.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidebar.css">

</head>
  <body>
    <?php require_once('includes/sidebar_docente.php') ?>
   
    <div class="container p-5 mt-4 ">
      <div class="container-fluid p-0">
      <h1 class="h3">Asistencia de Salones a Cargo</h1>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header pb-0">
              <h4 class="subtext">Grado :</h4>
              <h6 class="sub2"><img src="../Imagenes/chack.png" width="30" height="30" class="rounded-circle my-n1" alt="Avatar"> Numero de Cursos</h6>
            </div>
            <div class="card-body">
              <table class="table table-striped" style="width:100%" style="height:100;">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Curso</th>
                    <th>Docente</th>
                    <th>Estado</th>
                    <th>Ingresar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="../Imagenes/mate.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Matematica</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/lengu.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Lenguaje</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/quimica.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td> Quimica </td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/libro-abierto.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Literatura</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/fisiscas.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Fisica</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/historia.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Historia</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/musica.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Musica y Artes</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/ingless.webp" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Ingles</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/geografia.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Geografia</td>
                    <td>Grado</td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  <tr>
                    <td><img src="../Imagenes/cultura General.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>Cultura General</td>
                    <td>Grado   </td>
                    <td><div class="progress" style="height: 3px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>25%</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Registrar</button></td>
                  </tr>
                  
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