<?php include 'includes/header.php' ?>

    <?php
        session_start();

        if(isset($_SESSION['datos_usuario'])) {
            header('Location: index.php');
        }
    ?>

    <main>
        <div class="row">
            <div class="col-md-5 p-5 fst-quote-container text-white min-h-100vh">
                <div class="d-flex align-items-center">
                    <svg width="44" height="48" viewBox="0 0 44 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M41.6416 0H2.2375C1.00176 0 0 1.09194 0 2.43891V22.8905C0 24.2375 1.00176 25.3295 2.2375 25.3295H10.3221V45.39C10.3214 46.0366 10.5565 46.657 10.9757 47.1144C11.3948 47.5719 11.9637 47.8289 12.5568 47.8289H31.3196C32.5553 47.8289 33.5571 46.737 33.5571 45.39V25.3384H41.6416C42.2348 25.3384 42.8036 25.0814 43.2228 24.6239C43.642 24.1664 43.8771 23.5461 43.8764 22.8995V2.43891C43.8771 1.79235 43.642 1.17199 43.2228 0.714522C42.8036 0.257051 42.2348 0 41.6416 0ZM2.59353 2.82997H20.6414V22.5025H2.59353V2.82997ZM30.9635 45.002H12.9156V25.3384H30.9635V45.002ZM41.2829 22.5025H23.235V2.82997H41.2829V22.5025Z" fill="white"/>
                        <path d="M14.8548 15.9228C15.3658 16.4456 16.1654 16.4318 16.661 15.8916C17.1566 15.3514 17.1693 14.4798 16.6897 13.9227L12.546 9.40611C12.038 8.85747 11.2192 8.85747 10.7111 9.40611L6.55655 13.9227C6.21121 14.276 6.06978 14.8062 6.18751 15.3063C6.30525 15.8063 6.66346 16.1967 7.12219 16.3251C7.58093 16.4534 8.06737 16.2992 8.39147 15.9228L11.6176 12.4062L14.8548 15.9228Z" fill="white"/>
                        <path d="M29.0327 15.9228L32.2589 12.4062L35.4851 15.9228C35.9962 16.4456 36.7957 16.4318 37.2913 15.8916C37.787 15.3514 37.7996 14.4798 37.32 13.9227L33.1764 9.40611C32.6683 8.85747 31.8495 8.85747 31.3414 9.40611L27.1978 13.9227C26.7182 14.4798 26.7308 15.3514 27.2265 15.8916C27.7221 16.4318 28.5216 16.4456 29.0327 15.9228Z" fill="white"/>
                        <path d="M18.7103 31.906C18.1985 31.384 17.3989 31.3991 16.9041 31.9401C16.4092 32.4812 16.3977 33.3528 16.8781 33.9091L21.0218 38.4227C21.2648 38.6885 21.5949 38.8379 21.9392 38.8379C22.2835 38.8379 22.6136 38.6885 22.8567 38.4227L27.0003 33.9091C27.3286 33.5518 27.457 33.0308 27.3373 32.5423C27.2176 32.0537 26.8678 31.672 26.4198 31.5407C25.9718 31.4095 25.4936 31.5487 25.1654 31.906L21.9392 35.4256L18.7103 31.906Z" fill="white"/>
                    </svg>
                    <h2 class="fw-lighter ms-3">LOGO</h2>    
                </div>

                <div class="text-quote-login">
                    <div>
                        <svg width="37" height="30" viewBox="0 0 37 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.9297 0.632812C33.5703 0.632812 34.3906 0.960938 34.3906 1.61719C34.3906 1.89844 34.1328 2.13281 33.6172 2.32031C29.3047 4.05469 27.1484 7.42969 27.1484 12.4453C27.8047 12.3516 28.2734 12.3047 28.5547 12.3047C34.1797 12.3047 36.9922 15.1172 36.9922 20.7422C36.9922 26.3203 34.1797 29.1094 28.5547 29.1094C22.0391 29.1094 18.7812 25.5234 18.7812 18.3516C18.7812 10.6172 21.8984 5.0625 28.1328 1.6875C29.4453 0.984375 30.7109 0.632812 31.9297 0.632812ZM13.5781 0.84375C15.2188 0.84375 16.0391 1.17188 16.0391 1.82812C16.0391 2.10938 15.7812 2.34375 15.2656 2.53125C10.9531 4.26563 8.79688 7.64063 8.79688 12.6562C9.45312 12.5625 9.92188 12.5156 10.2031 12.5156C15.8281 12.5156 18.6406 15.3281 18.6406 20.9531C18.6406 26.5312 15.8281 29.3203 10.2031 29.3203C3.6875 29.3203 0.429688 25.7344 0.429688 18.5625C0.429688 10.8281 3.54688 5.27344 9.78125 1.89844C11.0938 1.19531 12.3594 0.84375 13.5781 0.84375Z" fill="#DDDDDD"/>
                        </svg>
                        <p class="pt-4 px-5 lh-lg mb-0">
                            El colegio San Marcos es uno de los mejores colegios en Lima reconocido por la educación personalizada y centrada en el alumno. La misión del colegio es formar personas íntegras, responsables, sensibles, seguras de sí mismas, con pasión por el aprendizaje y que sean miembros comprometidos y activos en una comunidad global.
                        </p>
                        <div class="float-end">
                            <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 0H33.5V33H0V20.5H21V0Z" fill="white"/>
                            </svg>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-5 px-5">
                        <p class="mb-0">Altair</p>
                        <div class="ms-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.666687 7.99984C0.666687 3.94975 3.94993 0.666504 8.00002 0.666504C12.0501 0.666504 15.3334 3.94975 15.3334 7.99984C15.3334 12.0499 12.0501 15.3332 8.00002 15.3332C3.94993 15.3332 0.666687 12.0499 0.666687 7.99984Z" fill="#08AD36"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5405 5.36182C11.8008 5.62217 11.8008 6.04428 11.5405 6.30463L7.40242 10.638C7.14207 10.8983 6.71996 10.8983 6.45961 10.638L4.45961 8.63796C4.19926 8.37761 4.19926 7.9555 4.45961 7.69515C4.71995 7.4348 5.14207 7.4348 5.40241 7.69515L6.93101 9.22375L10.5977 5.36182C10.858 5.10147 11.2801 5.10147 11.5405 5.36182Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 min-h-100vh d-flex align-items-center my-5 my-md-0">
                <div class="container ">
                    <div id="volver" class="d-flex align-items-center mb-5 pointer d-none">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                        </svg>
                
                        <p class="mb-0 ms-2 text-secondary">Volver</p>
                    </div>
                    <div class="container mx-lg-5" id="containerLoginPageRight">
                        <div>
                            <h5 class="fw-bold fs-4" id="titleLoginPage">¡Bienvenido!</h5>
                            <p class="text-secondary" id="textLoginPage">Para comenzar este viaje, seleccione el tipo de cuenta a ingresar</p>
                        </div>
                        <div class="row mx-auto" id="containerBtnRoles">
                            <div href="#" id="btnAlumno" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="bg-1st p-3 pb-2 ms-2 me-4 polygon">
                                    <i class="far fa-user fs-5 text-white"></i>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">ALUMNO</p>
                                        <p class="text-secondary fs-6">Cuenta para padres para gestionar todas las actividades y reportes del alumno.</p>
                                    </div>
                                    <div class="pe-3 d-none arrow">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div href="#" id="btnDocente" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="bg-1st p-3 pb-2 ms-2 me-4 polygon">
                                    <i class="fas fa-suitcase fs-5 text-white"></i>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">DOCENTE</p>
                                        <p class="text-secondary fs-6">Cuenta para los profesores de nuestra institución.</p>
                                    </div>
                                    <div class="pe-3 d-none arrow">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                        </svg>
                                    </div> 
                                </div>
                            </div>
                            <div href="#" id="btnAdmin" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="bg-1st p-3 pb-2 ms-2 me-4 polygon">
                                    <i class="fas fa-wrench fs-5 text-white"></i>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">ADMINISTRADOR</p>
                                        <p class="text-secondary fs-6">Cuenta administrativa.</p>
                                    </div>
                                    <div class="pe-3 d-none arrow">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <form method="POST" class="d-none formulario" action="src/autenticacion.php">
                            <input type="hidden" name="frmname" id="frmname" value=""/>
                            <div class="mb-4">
                                <p class="label-color">ID</p>
                                <input type="text" class="form-control" placeholder="ID" id="id" name="id"/>
                            </div>
                            <div class="mb-5">
                                <p class="label-color">Contraseña*</p>
                                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" />
                            </div>
                            <div class="mt-5">
                                <input type="submit" class="btn btn-colors d-block w-100" value="INGRESAR" id="btnIngresar"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <script src="assets/js/loginLogic.js?v=<?php echo time(); ?>"></script>
<?php include 'includes/footer.php' ?>