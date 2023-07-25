<?php
session_start();
include_once 'Modelo/clsAdmi.php';

class controladorAdministrador
{

    public function Empleado()
    {
        $admi = new clsAdmi();
        if (!empty($_POST)) {
            $nombre = $_POST['nombre'];
            $ap = $_POST['ap'];
            $am = $_POST['am'];
            $us=$_POST['Usuario'];
            $correo=$_POST['correo'];
            $passw=$_POST['password'];
            $tel = $_POST['tel'];
            $edad = $_POST['fecha'];

    
            $admi->AltaEmpleadoss($nombre, $ap, $am,$us,$correo,$passw, $tel, $edad);
        }

            $Empleados =$admi->ConsultaEmpleados();

            include_once("Vistas/Administrador/frmAltaEmpleados.php");
        
    }

    public function eliminarempleado()
    {
            $Empleadoid = $_GET['id'];
            $admi = new clsAdmi();
    
        // Assuming that $productoId is the ID of the product to be deleted
        // Perform any additional validation if necessary before deleting
    
        // Llamada a la función para eliminar el producto
            $admi->EliminarEmpleados($Empleadoid);
    
            $Empleados = $admi->ConsultaEmpleados();
    
            include_once("Vistas/Administrador/frmAltaEmpleados.php");
    
    }
    public function ActualizarEmpleado(){

        $EmpleadoId = $_POST['id'];
        $admi = new clsAdmi();

        $nombre = $_POST['nombre'];
        $ap = $_POST['ap'];
        $am = $_POST['am'];
        $tel = $_POST['tel'];
        $edad = $_POST['fecha'];



        $admi->ActualizarEmpleado($nombre, $ap, $am,$tel, $edad,$EmpleadoId);

        $Empleados = $admi->ConsultaEmpleados();

        include_once("Vistas/Administrador/frmAltaEmpleados.php");

}



    



}
