
<?php
session_start();
include_once 'Modelo/clsLogin.php';
include_once 'Modelo/clsAlta.php';

class ControladorLogin
{

    public function sesion()
    {
        include_once "Vistas/Principal/frmLogin.php";
    }

    public function acceder()
	{
		$login = new clsLogin();

		if (!empty($_POST)) {
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$datos = $login->buscausuario($usuario, $passw);

			if ($datos->num_rows > 0) {
				$usuario = $datos->fetch_object();
				$_SESSION['Tipo'] = $usuario->Tipo;

				if ($_SESSION['Tipo'] === 'Administrador') {

					include_once("Vistas/Administrador/frmUsuarioPricipal.php");

				} else if  ($_SESSION['Tipo'] === 'Cliente')  {

                    $galeria = new clsAlta();
                    $productos= $galeria->consultaproductos();

					include_once("Vistas/cliente/frmproductoscliente.php");
                    
                    
				} 
			} 
            else {
				include_once("Vistas/principal/frmRegistro.php");
			}
		}
	}
    
    public function Registro()
    {
        session_destroy();
        include_once "Vistas/Principal/frmRegistro.php";
    }

    public function Registrado()
    {
        $login = new clsLogin();
        if (!empty($_POST)) {
            $nombre = $_POST['nombre'];
            $ap = $_POST['apellidoP'];
            $am = $_POST['apellidoM'];
            $usuario = $_POST['Usuario'];
            $correo = $_POST['correo'];
            $passw = $_POST['password'];
            $tel = $_POST['Telefono'];
            $fecha = $_POST['fecha'];
    
            $resultado = $login->insertarUsuario($nombre, $ap, $am, $usuario, $correo, $passw, $tel, $fecha);
    
            if ($resultado) {
                include_once("Vistas/Principal/frmLogin.php");
            } else {
                echo "Error al guardar los datos en la base de datos.";
            }
        } else {
            include_once("Vistas/Principal/frmRegistro.php");
        }
    }
    
    

    public function cerrarSesion()
    {
        session_destroy();
        include_once "Vistas/Principal/frmProductos.php";
    }
}
