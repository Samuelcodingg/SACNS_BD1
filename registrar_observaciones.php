<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrar Observaciones</title>
    <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/registrar_observaciones.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidebar.css">
</head>
  <body>
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
   
    <div class="container p-3 mt-5">
      <div class="container-fluid p-0">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
 
            <div class="card-header pb-0 ">
               <h4 class="mt-3" style="font-size: 25px; font-weight: 100; color: #2D3748;">Observaciones Curso: 'Matemática'</h1>
              <h4 class="subtext" style="font-size: 20px; font-weight: 100; color: #2D3748;">Grado :</h4>

              <h6 class="sub2" style="color: #A0AEC0"><img src="../Imagenes/chack.png" width="30" height="30" class="rounded-circle my-n1" alt="Avatar"> 5to de Secundaria</h6>
            </div>
            <div class="card-body mt-3">
                <div class="container justify-content-center">
                    <div class="row">
                        <div class="col-md-18">
                            <div class="input-group mb-3"> <input type="text" class="form-control input-text" placeholder="DNI a buscar...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append"> <button class="btn btn-outline-dark btn-lg" type="button"><i class='bx bx-search-alt-2' ></i></button> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container justify-content-center m-2 p-4" id="datos">
                    <h6 class="sub2"><img src="..\Imagenes\profile.jpg" width="30" height="30" class="rounded-circle my-n1" alt="Avatar" style="margin-right: 10px;">José Carlos Pepe Mariano</h6>
                    <form>
                        <div class="form-group">
                            <label>Observación</label>
                            <textarea class="form-control" style="height: 120px;"></textarea>
                        </div>
                    </form>
                </div>
                <center>
                        <div class="form-group mt-4">
                        <button  type="button" id="btn3"> GRABAR </button>
                    </div>
                   
                </center>
                
            </div>
          </div>
        </div>
  
        
      </div>
  
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/sidebar.js"></script>
  </body>
</html>
