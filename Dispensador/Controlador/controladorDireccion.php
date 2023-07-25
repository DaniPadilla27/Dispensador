<?php
session_start();
include_once 'Modelo/clsDireccion.php';

class ControladorDireccion
{
    public function RegistroD()
    {
        $direccion = new clsDireccion();
        if (!empty($_POST)) {
            $estado = $_POST['Estado'];
            $municipio = $_POST['Municipio'];
            $colonia = $_POST['Colonia'];
            $referencia = $_POST['Referencia'];

            $resultado = $direccion->insertarDireccion($estado, $municipio, $colonia, $referencia);

            if ($resultado) {
                include_once("Vistas/cliente/frmDetallecompra.php");
            } else {
                echo "Error al guardar los datos en la base de datos.";
            }
        } else {
            include_once("Vistas/cliente/frmDirecciones.php");
        }
    }
}
