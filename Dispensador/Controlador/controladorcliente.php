
<?php
session_start();
include_once 'Modelo/clsAlta.php';



class Controladorcliente
{

    public function iniciocliente()
    {   $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();
        include_once "Vistas/cliente/frminiciocliente.php";

    }

    public function productoscliente()
    
    
    {
        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();
        include_once "Vistas/cliente/frmProductoscliente.php";

    }

    public function direccion()
    {
        include_once "Vistas/cliente/frmDirecciones.php";

    }
    public function principalcliente()
    {
        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();

        include_once "Vistas/cliente/frmproductoscliente.php";

    }
    public function regresar()
    {
        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();

        include_once "Vistas/Administrador/frmUsuarioPricipal.php";

    }

    public function regresarcliente()
    {
        $galeria = new clsAlta();
        $productos= $galeria->consultaproductos();

        include_once "Vistas/cliente/frmproductoscliente.php";

    }




    




}
