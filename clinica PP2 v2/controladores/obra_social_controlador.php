<?php
require_once "../modelos/obra_social.php";

class Validar {

    function validarCamposVacios() {  //valida campos vacios
        if (isset($_POST['obra']) || isset($_POST['descripcion_obra'])) { // si hay algo
            echo "<script>alert('Registrado con éxito');</script>";
            header("Location: ../template/obra_social_lista.php");
            exit(); // exit() después de header() para detener la ejecución del script
        } 
        else { // si no hay nada
            echo "<script>alert('Complete los campos vacíos');</script>";
            header("Location: ../template/obra_social_lista.php");
            exit();
        }
    }
    //agregar validacion para modificar y para eliminar
   


    
}
?>