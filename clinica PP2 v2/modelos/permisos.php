<?php

require_once ('conexion.php');

class Permiso{
    private $id_permiso;
    private $nombre_permiso;
    private $detalle;

    public function __construct($nombre_permiso, $detalle) {
        $this->nombre_permiso = $nombre_permiso;
        $this->detalle = $detalle;
    }
}

?>