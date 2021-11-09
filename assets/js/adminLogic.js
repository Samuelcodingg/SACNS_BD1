const btnCrearUsuario = document.getElementById('btnCrearUsuario');
const btnEliminarUsuario = document.getElementById('btnEliminarUsuario');
const form = document.querySelector('.formulario');
const containerBtnRoles = document.getElementById('containerBtnRoles');
const titleLoginPage = document.getElementById('titleLoginPage');
const textLoginPage = document.getElementById('textLoginPage');
const titlePhase = document.getElementById('titlePhase');
const cerrarSesion = document.getElementById('cerrarSesion');
const volver = document.getElementById('volver');


document.addEventListener('DOMContentLoaded', () => {

    btnCrearUsuario.addEventListener('click', showRegisterForm);

    volver.addEventListener('click', volverAccion);
})

const showRegisterForm = () => {
    containerBtnRoles.classList.add('d-none');
    titleLoginPage.textContent = 'Registrar nuevo usuario';
    textLoginPage.textContent = 'Escoger en el tipo de usuario a registrar (Alumno - Docente)';
    form.classList.remove('d-none');
    titlePhase.textContent = 'Información Personal';
    cerrarSesion.classList.add('d-none');
    volver.classList.remove('d-none');
}

const volverAccion = () => {
    form.classList.add('d-none');
    volver.classList.add('d-none');
    cerrarSesion.classList.remove('d-none');
    containerBtnRoles.classList.remove('d-none');
}