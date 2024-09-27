<?php

class PlantillaControlador{
    public function traer_plantilla(){
        return include('vistas/plantilla.php');

    }
    
}

class PlantillaIndoxo{
    public function traer_plantilla_indexo(){
        return include('vistas/paginas/indexo.php');
    }
}

?>