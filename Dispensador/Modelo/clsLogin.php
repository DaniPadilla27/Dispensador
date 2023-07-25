<?php
include_once 'config/DBConnection.php';

class clsLogin extends clsconexion
{
	public function buscausuario($usuario,$passw)
	{
		$sql = "CALL sp_login('$usuario','$passw');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	

	public function insertarUsuario($nombre, $ap, $am, $usuario, $correo, $passw, $tel, $fecha)
	{
		try {
			$sql = "CALL SP_RegistrarClienteUsuario('$nombre','$ap','$am','$usuario','$correo','$passw','$tel','$fecha')";
			$resultado = $this->conectar->query($sql);
			return $resultado;
		} catch (Exception $e) {
			echo "Error al insertar los datos: " . $e->getMessage();
			return false;
		}
	}
	
}
?>
