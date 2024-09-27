<?php
if (!isset($_SESSION['id_usuario'])) {
    header('Location: login.php');
    exit();
}

$nombre_usuario = $_SESSION['nombre_usuario'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="sidebar">
        <h2>Admin</h2>
        <a href="#dashboard">Dashboard</a>
        <a href="#profile">Perfil</a>
        <a href="#settings">Configuraciones</a>
        <a href="#logout">Cerrar Sesión</a>
    </div>
    <div class="content">
        <h1>Bienvenido al Dashboard</h1>
        <p>Aquí puedes gestionar tu clínica.</p>
    </div>

    <div class="container">
        <div class="perfil">
            <img src="assets/images/img_avatar1.png" alt="Foto de perfil" class="rounded-circle" style="width:100px;">
            <h1><?php echo $nombre_usuario; ?></h1>
            <p><?php echo $email; ?></p>
            <div class="modulos">
                <a href="index.php?page=lista_usuario">Lista de Usuario</a><br>
                <a href="#modulo2">Módulo 2</a><br>
                <a href="#modulo3">Módulo 3</a>
            </div>
            <a href="vistas/paginas/salida.php" class="btn btn-danger mt-3">Cerrar Sesión</a>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
