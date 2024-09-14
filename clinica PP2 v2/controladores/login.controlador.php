<?php

require_once ('../modelos/usuarios.php');

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'login') {
        $login_controlador = New LoginControlador();
        $login_controlador->ingresar();
    }
}


class LoginControlador {
    public function ingresar() {
        $usuario = new Usuario();
        $usuario->setNombre_usuario($_POST['nombre_usuario']);
        $usuario->setEmail($_POST['email']);
        $resultado = $usuario->validar_usuario();
        if($resultado->num_rows > 0){
            while ($row = $resultado->fetch_assoc()) {
                if (password_verify($_POST['password'], $row['password'])) {
                    header('Location: ../index.php?page=lista_usuario');
                }else{
                    header('Location:../index.php?message=Contraseña no coincide con la de la base de datos&status=danger');
                }
            }

        }else{
            header('Location: ../index.php?message=Usuaeio o Contraseña no correcto&status=danger');
        }
    }

    public function registrar() {

    }

}
?>