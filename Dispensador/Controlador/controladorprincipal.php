
<?php
session_start();
include_once 'Modelo/clsAlta.php';

class Controladorprincipal
{

    public function inicio()
    {
        include_once "Vistas/Principal/frmInicio.php";

    }

    public function Productos()
    {
        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();
        //inicializamos vista con la ruta de la pantalla que queremos llamar
    
        //cargamos la plantilla del administrador que por default se lleva a la variable 
        //vista
        include_once("Vistas/Principal/frmProductos.php");

    }

    public function DetalleProductos()
    {
        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();
        //inicializamos vista con la ruta de la pantalla que queremos llamar
    
        //cargamos la plantilla del administrador que por default se lleva a la variable 
        //vista
        include_once("Vistas/Principal/detalleproducto.php");

    }


    


}
