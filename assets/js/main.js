const btnAlumno = document.getElementById('btnAlumno');
const containerBtnRoles = document.getElementById('containerBtnRoles')
const titleLoginPage = document.getElementById('titleLoginPage');
const textLoginPage = document.getElementById('textLoginPage');
const containerLoginPageRight = document.getElementById('containerLoginPageRight');

document.addEventListener('DOMContentLoaded', () => {
    btnAlumno.addEventListener('click', showInitialOptions);

})

const showInitialOptions = () => {
    containerBtnRoles.classList.add('d-none');
    titleLoginPage.textContent = 'Iniciar Sesión';
    textLoginPage.textContent = 'Bienvenido, coloque su ID y Contraseña';

    renderLoginForm();

}

const renderLoginForm = () => {
    const formLogin = document.createElement('form');
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