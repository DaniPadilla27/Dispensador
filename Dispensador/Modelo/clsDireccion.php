<?php
include_once 'config/DBConnection.php';

	class clsDireccion extends clsconexion
{
    public function insertarDireccion($estado, $municipio, $colonia, $referencia)
    {
        try {
            $sql = "CALL SP_InsertarDireccionCompleta ('$estado', '$municipio', '$colonia', '$referencia')";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }
}
