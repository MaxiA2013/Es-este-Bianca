<?php

require_once 'conexion.php';

class Perfil{
    private $id_perfil;
    private $nombre_perfil;
    private $descripcion;

    public function __construct($id_perfil, $nombre_perfil, $descripcion)
    {
        $this->id_perfil = $id_perfil;
        $this->nombre_perfil = $nombre_perfil;
        $this->descripcion = $descripcion;
    }

    public function traer_perfil($id_perfil){
        $conexion = new Conexion();
        $query = "SELECT * FROM clinica.perfil WHERE id_perfil = '$id_perfil'";
        return $conexion->consultar($query);
    }

    public function guardar(){
        $conexion = new Conexion();
        $query = "INSERT INTO clinica.perfil (nombre_perfil, descripcion) VALUES ('$this->nombre_perfil', '$this->descripcion')";
        return $conexion->insertar($query);
    }

}

?>