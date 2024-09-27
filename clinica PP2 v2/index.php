<?php

require_once('modelos/usuarios.php');
require_once('controladores/plantilla.controlador.php');

// Cargar la plantilla para la vista externa
$plantillaIndoxo = new PlantillaIndoxo();
$plantillaIndoxo->traer_plantilla_indexo();

// Cargar la plantilla para el inicio de sesión
$plantillaControlador = new PlantillaControlador();
$plantillaControlador->traer_plantilla();


?>