<!-- Modal de Login Simple -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content position-relative py-5">
            <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" src="<?php echo THEME_IMG; ?>bckg-card.webp" alt="Background" style="border-radius: 15px;">
            <div class="modal-header text-center position-relative">
                <div class="w-100">
                    <h1 class="welcome-text mb-3">
                        <img src="<?php echo THEME_IMG; ?>text-welcome.svg" alt="Welcome" style="max-width: 100%; height: auto;">
                    </h1>
                    <div class="col-12 col-lg-10 mx-auto">
                        <p class="fs-3 text-black mb-3">Enter here the password we send you to access the website:</p>
                    </div>
                </div>
            </div>
            <div class="modal-body position-relative">
                <div id="errorAlert" class="alert alert-danger d-none mb-2" role="alert"></div>
                
                <form id="simpleLoginForm">
                    <div class="mb-4">
                        <input type="password" class="form-control bg-white-100 border-0 border-radius-0 text-gray-200 font-base fs-5" id="password" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-secondary border-0 mx-auto" id="loginBtn">
                            <span id="btnText">ENTER</span>
                            <span id="btnSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
body.login-protected {
    overflow: hidden;
}
body.modal-open {
    overflow: hidden;
}
.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1055;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
    display: none;
    background-color: rgba(118, 122, 97, 0.75);
}
.modal.show {
    display: block !important;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 1.75rem auto;
    max-width: 500px;
    pointer-events: none;
}
.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 3.5rem);
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-clip: padding-box;
    border-radius: 15px;
    outline: 0;
}
.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    border-bottom: none;
    padding: 2rem 2rem 0 2rem;
}
.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 0 2rem 2rem 2rem;
}
.welcome-text {
    font-family: 'Georgia', serif;
    color: #8fbc8f;
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-style: italic;
}
.login-btn {
    background-color: #8fbc8f;
    border-color: #8fbc8f;
    padding: 12px 40px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}
.login-btn:hover {
    background-color: #7da97d;
    border-color: #7da97d;
    transform: translateY(-2px);
}
.form-control {
    padding: 15px;
    font-size: 1.1rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    transition: all 0.3s ease;
}
.form-control:focus {
    border-color: #8fbc8f;
    box-shadow: 0 0 0 0.2rem rgba(143, 188, 143, 0.25);
}
.spinner-border-sm {
    width: 1rem;
    height: 1rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Verificar si ya está validado
    const isValidated = localStorage.getItem('site_access') === 'granted';
    
    if (!isValidated) {
        // Mostrar modal si no está validado (JavaScript puro)
        document.body.classList.add('login-protected');
        const modal = document.getElementById('loginModal');
        modal.classList.add('show');
        modal.style.display = 'block';
        document.body.classList.add('modal-open');
    }

    // Manejar el envío del formulario
    document.getElementById('simpleLoginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const password = document.getElementById('password').value;
        const btnText = document.getElementById('btnText');
        const btnSpinner = document.getElementById('btnSpinner');
        const loginBtn = document.getElementById('loginBtn');
        const errorAlert = document.getElementById('errorAlert');
        
        // Mostrar loading
        btnText.classList.add('d-none');
        btnSpinner.classList.remove('d-none');
        loginBtn.disabled = true;
        errorAlert.classList.add('d-none');
        
        // Validar contraseña (súper simple)
        if (password === 'Cartagena2025') {
            // Guardar en localStorage
            localStorage.setItem('site_access', 'granted');
            
            // Ocultar modal (JavaScript puro)
            const modal = document.getElementById('loginModal');
            modal.classList.remove('show');
            modal.style.display = 'none';
            document.body.classList.remove('modal-open');
            document.body.classList.remove('login-protected');
            
        } else {
            // Mostrar error
            errorAlert.textContent = 'Incorrect password, please try again';
            errorAlert.classList.remove('d-none');
            
            // Restaurar botón
            btnText.classList.remove('d-none');
            btnSpinner.classList.add('d-none');
            loginBtn.disabled = false;
            
            // Limpiar campo
            document.getElementById('password').value = '';
            document.getElementById('password').focus();
        }
    });
});
</script> 