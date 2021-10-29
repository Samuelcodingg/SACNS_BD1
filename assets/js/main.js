const btnAlumno = document.getElementById('btnAlumno');
const btnDocente = document.getElementById('btnDocente');
const containerBtnRoles = document.getElementById('containerBtnRoles')
const titleLoginPage = document.getElementById('titleLoginPage');
const textLoginPage = document.getElementById('textLoginPage');
const containerLoginPageRight = document.getElementById('containerLoginPageRight');

document.addEventListener('DOMContentLoaded', () => {

    btnAlumno.addEventListener('click', showLoginAlumno);

    btnDocente.addEventListener('click', showLoginDocente);
})

const showLoginAlumno = () => {
    containerBtnRoles.classList.add('d-none');
    titleLoginPage.textContent = 'Iniciar Sesión';
    textLoginPage.textContent = 'Bienvenido, coloque su ID y Contraseña';

    renderLoginForm('idFormAlumno');
    renderVolver();
}

const showLoginDocente = () => {
    containerBtnRoles.classList.add('d-none');
    titleLoginPage.textContent = 'Iniciar Sesión';
    textLoginPage.textContent = 'Bienvenido, coloque su ID y Contraseña';

    renderLoginForm('idFormDocente');
}

const renderLoginForm = (idPerfilForm) => {
    const formLogin = document.createElement('form');
    formLogin.setAttribute('method', 'POST');
    formLogin.setAttribute('id', idPerfilForm);

    const formContent = `
        <div class="mb-4">
            <p class="label-color">ID</p>
            <input type="text" class="form-control" placeholder="ID" />
        </div>
        <div class="mb-5">
            <p class="label-color">Contraseña*</p>
            <input type="password" class="form-control" placeholder="Contraseña" />
        </div>
        <div class="mt-5">
            <input type="submit" class="btn btn-colors d-block w-100" value="INGRESAR" />
        </div>
    `
    formLogin.innerHTML = formContent;
    containerLoginPageRight.appendChild(formLogin);
}

const renderVolver = () => {
    const divVolver = document.createElement('div');
    divVolver.classList.add('d-flex','align-items-center','mb-5','pointer');

    const contentDiv = `
        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
        </svg>

        <p class="mb-0 ms-2 text-secondary">Volver</p>
    `

    divVolver.innerHTML = contentDiv;
    containerLoginPageRight.parentElement.insertBefore(divVolver, containerLoginPageRight);
}