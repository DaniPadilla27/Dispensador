<?php
session_start();
include_once 'Modelo/clsAlta.php';

class Controladoraltaproductos
{
   
    public function alta()
    {
        $alta = new clsAlta();
        //var_dump($_FILES['txtimagen']);
        if (!empty($_POST)) {

            $NombreProducto = $_POST['txtnombreProducto'];
            $descripcion = $_POST['txtDescripcion'];
            $precio = $_POST['txtPrecio'];
            $stock = $_POST['txtstock'];
            $categoria = $_POST['txtCategoria'];
            $imagen = $_FILES['txtimagen'];
            $img=file_get_contents($imagen['tmp_name']);
            $img=$alta->conectar->real_escape_string($img);

            // Llamada a la función para dar de alta el producto
            $alta->altaproducto($NombreProducto, $descripcion, $precio, $stock,$categoria, $img);
           
        }

        // Llamada a la función para obtener la lista de productos
        $productos = $alta->consultaproductos();

        include_once("Vistas/Administrador/frmaltaproductos.php");
    }

    public function MostrarCatalogo() {
        $alta = new clsAlta();
        if(empty($_POST))
        { 
            $productos = $alta-> ConsultaProductos();
        }else
        {  
            $idCat=$_POST['selectCategoria'];
            if(!empty($idCat))
            { 
                $productos = $alta-> ConsultaProductos2($idCat);
            }
        }
        include_once("Vistas/Principal/frmProductos.php");
        }
        public function MostrarCatalogocliente() {
            $alta = new clsAlta();
            if(empty($_POST))
            { 
                $productos = $alta-> ConsultaProductos();
            }else
            {  
                $idCat=$_POST['selectCategoria'];
                if(!empty($idCat))
                { 
                    $productos = $alta-> ConsultaProductos2($idCat);
                }
            }
            include_once("Vistas/cliente/frmproductoscliente.php");
            }

        public function MostrarDetalleProducto()
        {
            $productoId = $_GET['id'];
            $alta = new ClsAlta();
            $Detalleproductos = $alta->consultaDetalle($productoId);
    

            include_once("Vistas/Principal/detalleproducto.php");
        }

        public function MostrarDetalleProductoCliente()
        {
            $productoId = $_GET['id'];
            $alta = new ClsAlta();
            $Detalleproductos = $alta->consultaDetalle($productoId);
    

            include_once("Vistas/cliente/frmdetalleproductocliente.php");
        }

        public function eliminarProducto()
{
        $productoId = $_GET['id'];
        $alta = new clsAlta();

    // Assuming that $productoId is the ID of the product to be deleted
    // Perform any additional validation if necessary before deleting

    // Llamada a la función para eliminar el producto
        $alta->Eliminar($productoId);

        $productos = $alta->consultaproductos();

        include_once("Vistas/Administrador/frmaltaproductos.php");

}
        public function ActualizarProducto(){

        $productoId = $_POST['id'];
        $alta = new clsAlta();
        $NombreProducto = $_POST['txtnombreProducto'];
        $descripcion = $_POST['txtDescripcion'];
        $precio = $_POST['txtPrecio'];
        $stock = $_POST['txtstock'];
        $categoria = $_POST['txtCategoria'];


        $alta->ActualizarProducto($NombreProducto, $descripcion, $precio, $stock,$categoria,$productoId);

        $productos = $alta->consultaproductos();

        include_once("Vistas/Administrador/frmaltaproductos.php");


}



    }



