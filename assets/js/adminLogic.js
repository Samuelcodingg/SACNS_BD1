const btnCrearUsuario = document.getElementById('btnCrearUsuario');
const btnEliminarUsuario = document.getElementById('btnEliminarUsuario');
const form = document.querySelector('.formulario');
const containerBtnRoles = document.getElementById('containerBtnRoles');
const titleLoginPage = document.getElementById('titleLoginPage');
const textLoginPage = document.getElementById('textLoginPage');


document.addEventListener('DOMContentLoaded', () => {

    btnCrearUsuario.addEventListener('click', showRegisterForm);
})

const showRegisterForm = () => {
    containerBtnRoles.classList.add('d-none');
    titleLoginPage.textContent = 'Registrar nuevo usuario';
    textLoginPage.textContent = 'Escoger en el tipo de usuario a registrar (Alumno - Docente)';
    form.classList.remove('d-none');
}