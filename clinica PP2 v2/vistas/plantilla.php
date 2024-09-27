<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
  $peges = 'login';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <!-- Latest compiled and minified CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    
  </head>
  <body>
    
            <!--/.navbar-t start-->
    <?php
          if(isset($_SESSION['nombre_perfil'])){
            include('vistas/componentes/navbar.php');
          }
    //if (isset($_SESSION['nombre_perfil'])) {
        //switch ($_SESSION['nombre_perfil']) {
            //case 'Administrador':
                //include 'vistas/componentes/admin.navbar.php';
                //break;
            //case 'Paciente':
                //include 'vistas/componentes/cliente.navbar.php';
                //break;
            //case 'gerente':
                //include 'vistas/componentes/gerente.navbar.php';
                //break;
            //default:
                //break;
        //}
   // } else {
        //}
    ?>
    <!--/.navbar-t end-->

    <?php
        if (isset($_GET['message'])){
          echo '<div class="alert alert-'.$_GET['status'].'" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          '.$_GET['message'].'
          </div>';
        }
        ?>
      <div class="container">
        <?php
        
          if(isset($_GET['page'])){
            $peges = $_GET['page'];
            if(isset($_SESSION['nombre_usuario'])){
              if ($peges == 'login'
                  || $peges == 'registro'
                  || $peges == 'lista_usuario'
                  || $peges == 'mi_perfil'
                  || $peges == 'salida'){
                
                    include('paginas/'.$peges.'.php');

              }else{
                    include('vistas/paginas/404.php');
              }
            }else{
              include('vistas/paginas/403.php');
            }
          }else{
            if(isset($_SESSION['nombre_usuario'])){
              include('vistas/paginas/lista_usuario.php');
            }else{
              include('vistas/paginas/login.php');
            }
          }
          ?>
      </div>
      <!-- Jquery -->
      <script src="assets/js/jquery-3.7.1.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/all.min.js"></script>
    </body>
    </html>