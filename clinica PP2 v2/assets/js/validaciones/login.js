function validate(){
    var nombre_usuario = document.getElementById('nombre_usuario');
    var email = document.getElementById('email'); 
    var password = document.getElementById('password');
    var form = document.getElementById('id_form');

    var id_usuario_parrafo = document.getElementById('id_usuario_parrafo');
    var id_email_parrafo = document.getElementById('id_email_parrafo');
    var id_contraseña_parrafo = document.getElementById('id_contraseña_parrafo');
    
    if (nombre_usuario.value === ''){
        nombre_usuario.classList.add('validation-error');
        id_usuario_parrafo.style.display = 'block';
        return;
    }
    if (email.value === ''){
        email.classList.add('validation-error');
        id_email_parrafo.style.display = 'block';
        return;
    }
    if (password.value === ''){
        password.classList.add('validation-error');
        id_contraseña_parrafo.style.display = 'block';
        return;
    }
    form.submit();
}