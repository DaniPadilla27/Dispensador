<?php
include_once 'config/DBConnection.php';

class clsAdmi extends clsconexion
{


	public function AltaEmpleadoss($nombre, $ap, $am,$us,$correo,$passw, $tel, $edad)
	{
		try {
			$sql = "CALL SP_RegistrarAdministrador('$nombre','$ap','$am','$us','$correo','$passw','$tel','$edad')";
			$resultado = $this->conectar->query($sql);
			return $resultado;
		} catch (Exception $e) {
			echo "Error al insertar los datos: " . $e->getMessage();
			return false;
		}
	}
	public function ConsultaEmpleados()
	{
		try {
		$sql = "select * from tblempleados;";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	} catch (Exception $e) {
		echo "Error al insertar los datos: " . $e->getMessage();
		return false;
	}


	}

	public function ActualizarEmpleado($nombre, $ap, $am, $tel, $edad,$id)
	{
		try {
		$sql = "call sp_ActualizarEmpleado('$nombre','$ap','$am','$tel','$edad',$id)";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	} catch (Exception $e) {
		echo "Error al actualizar los datos: " . $e->getMessage();
		return false;
	}


	}
	
	public function EliminarEmpleados($id)
    {
        try {
            $sql = "CALL sp_eliminarempleado ($id)";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }
	
	




}
?>