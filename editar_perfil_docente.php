<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Editar Perfil</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/sidebar.css">
</head>
<body>
    <?php require_once('includes/sidebar_docente.php') ?>
    <div class="container mt-5 ml-5 p-5">
        <div class="col">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="e-profile">
                      <div class="row">
                        <div class="col-12 col-sm-auto mb-3">
                          <div class="mx-auto" style="width: 140px;">
                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                              <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                            </div>
                          </div>
                        </div>
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                          <div class="text-center text-sm-left mb-2 mb-sm-0">
                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"> <?php echo $_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'] ?> </h4>
                            <p class="mb-0"> <?php echo $_SESSION['datos_usuario']['email'] ?> </p>
                            <div class="mt-2">
                              <button class="btn btn-primary" type="button">
                                <i class="fa fa-fw fa-camera"></i>
                                <span>Cambiar Foto</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="" class="active nav-link">Editar</a></li>
                      </ul>
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                          <form class="form" novalidate="" method="POST" action="src/editar_docente.php">
                            <div class="row">
                              <div class="col">
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Nombre: </label>
                                      <input class="form-control" type="text" name="name" disabled value="<?php echo $_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'] ?>">
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Teléfono</label>
                                      <input class="form-control" type="number" name="celular" placeholder="***-***-***" value="<?php echo $_SESSION['datos_usuario']['celular']?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Correo:</label>
                                      <input class="form-control" type="text" name="email"  placeholder="user@example.com" value="<?php echo $_SESSION['datos_usuario']['email'] ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Dirección:</label>
                                        <input class="form-control" type="text" name="direccion" placeholder="Los Olivos - Comas" value="<?php echo $_SESSION['datos_usuario']['direccion'] ?>" >
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 col-sm-12 mb-3">
                                <div class="mt-4 mb-2"><b>Cambiar Contraseña</b></div>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Contraseña Actual</label>
                                      <input class="form-control" type="password" placeholder="••••••">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Nueva Contraseña</label>
                                      <input class="form-control" name="contrasenia" type="password" placeholder="••••••">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Confirmar <span class="d-none d-xl-inline">Contraseña</span></label>
                                      <input class="form-control" type="password" placeholder="••••••"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    
    <script src="assets/js/sidebar.js"></script>
</body>