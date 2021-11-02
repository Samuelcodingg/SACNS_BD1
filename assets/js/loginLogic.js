const btnAlumno = document.getElementById('btnAlumno');
const btnDocente = document.getElementById('btnDocente');
const btnAdmin = document.getElementById('btnAdmin');
const containerBtnRoles = document.getElementById('containerBtnRoles')
const titleLoginPage = document.getElementById('titleLoginPage');
const textLoginPage = document.getElementById('textLoginPage');
const containerLoginPageRight = document.getElementById('containerLoginPageRight');
const volver = document.getElementById('volver');
const form = document.querySelector('.formulario');

document.addEventListener('DOMContentLoaded', () => {

    btnAlumno.addEventListener('click', showLogin);

    btnDocente.addEventListener('click', showLogin);

    btnAdmin.addEventListener('click',showLogin);

    volver.addEventListener('click', volverAccion);
})

const showLogin = (e) => {
    const idBtn = e.currentTarget.id;
    containerBtnRoles.classList.add('d-none');
    titleLoginPage.textContent = 'Iniciar Sesión';
    textLoginPage.textContent = 'Bienvenido, coloque su ID y Contraseña';

    form.classList.remove('d-none');

    if(idBtn.includes('Alumno')) {
        form.setAttribute('id','formAlumno');
    }
    else if(idBtn.includes('Docente')){
        form.setAttribute('id', 'formDocente');
    }
    else {
        form.setAttribute('id','formAdmin');
    }

    showVolver();
}

const showVolver = () => {
    volver.classList.remove('d-none');
}

const volverAccion = () => {
    form.classList.add('d-none');
    volver.classList.add('d-none');
    containerBtnRoles.classList.remove('d-none');
}