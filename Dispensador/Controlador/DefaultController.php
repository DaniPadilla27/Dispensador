<?php
include_once 'Modelo/clsAlta.php';
//en esta clase definimos el controlador por default, este se llama cunado no indicamos 
//a que controlador queremos llamar 
class DefaultController{

    //nuestro controlador por default tendra una variable llamada vista que llmara a la 
    //ventana espesifica que yo quiero mostrar en la plantilla
    private $vista;

    //metodo por default este metodo es el encargado de cargar la plnatilla en pantalla
    //junto con la vista que quiero mostrar
    public function index(){

        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();
        //inicializamos vista con la ruta de la pantalla que queremos llamar
    
        //cargamos la plantilla del administrador que por default se lleva a la variable 
        //vista
        include_once("Vistas/Principal/frmProductos.php");
    }

    //podriamos tener otros metodos para nuestra pantalla por ejemplo mostrar pantallas de error
}
?>