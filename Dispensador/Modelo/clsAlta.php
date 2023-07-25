<?php
include_once 'config/DBConnection.php';

	class clsAlta extends clsconexion
{
    public function altaproducto( $NombreProducto, $descripcion, $precio ,$stock,$categoria,$imagen)
    {
        try {
            $sql = "CALL sp_altaproductos ('$NombreProducto', '$descripcion', $precio ,$stock,$categoria,'$imagen')";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }

    public function consultaproductos()
    {
        try {
            $sql = "select * from tblproducto;";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }
    public function consultaproductos2($idCat)
    {
        try {
            $sql = "select * from tblproducto where Categoria=$idCat;";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }

    public function consultadetalle($id)
    {
        try {
            $sql = "select * from tblproducto where Idproducto=$id;";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }

    public function Eliminar($id)
    {
        try {
            $sql = "CALL SP_EliminarProducto ($id)";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }



    public function ActualizarProducto($NombreProducto, $descripcion, $precio ,$stock,$categoria,$id)
    {
        try {
            $sql = "CALL sp_actualizarproducto ('$NombreProducto', '$descripcion', $precio ,$stock,$categoria,$id)";
            $resultado = $this->conectar->query($sql);
            return $resultado;
        } catch (Exception $e) {
            echo "Error al insertar los datos: " . $e->getMessage();
            return false;
        }
    }

    








}
