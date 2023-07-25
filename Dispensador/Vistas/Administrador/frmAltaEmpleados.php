
<title>ALta Empleados</title>
<link rel="stylesheet" href="http://localhost/Dispensador/estilos/usuario/altaempleados.css">
</head>
<body style="width= 300px; height : 300px; background:
linear-gradient(rgba(5,7,12,0.75),rgba(5,7,12,0.75)),
url('fondo4.jpg'); background-size: cover;">
<form class="form" action="http://localhost/Dispensador/?C=controladorAdministrador&M=Empleado" method="POST">


    <section class="form-register">
        <h4>Alta Empleado</h4>
        <input class="controls" type="text" name="nombre" id="" placeholder="Nombre" required >
        <input class="controls" type="text" name="ap" id="" placeholder="Apellido Paterno" required>
        <input class="controls" type="text" name="am" id="" placeholder="Apellido Materno" required>
        <input class="controls" type="text" name="Usuario" id="" placeholder="crea un usuario" required>
        <input class="controls" type="text" name="correo" id="" placeholder="Ingrese su correo" required>
        <input class="controls" type="password" name="password" id="" placeholder="crea una contraseña" required>
        <input minlenght="10" maxlenght="12" class="controls" type="text" name="tel" id="" placeholder="Telefono" required pattern="[0-9]+">
        <input class="controls" type="date" name="fecha" id="" placeholder="Ingrese tu fecha de Nacimiento" required>
    </form>
        <input class="botons" type="submit" value="Guardar">
        
        <p><a href="http://localhost/Dispensador/?C=Controladorcliente&M=regresar">Regresar</a></p>
      </section>


    

        <div class="centered-table">
        <h1>Registrados</h1>

        <table class="centered-table">

                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Telefono</th>
                    <th>edad</th>
                    <TH>Actualizar</TH>
                    <TH>Eliminar</TH>
                </tr>

                <?php foreach($Empleados as $Empleado): ?>
                <tr>
                <form method="POST" action="http://localhost/Dispensador/?C=ControladorAdministrador&M=ActualizarEmpleado" method="POST">

                    <td><?=$Empleado['idEmpleado']?></td>
                    <td><input type="text" name="nombre" value="<?=$Empleado['Nombre']?>"></td>
                    <td><input type="text" name="ap" value="<?=$Empleado['Apaterno']?>"></td>
                    <td><input type="text" name="am" value="<?=$Empleado['Amaterno']?>"></td>
                    <td><input type="text" name="tel" value="<?=$Empleado['Telefono']?>"></td>
                    <td><input type="date" name="fecha" value="<?=$Empleado['FechaNac']?>"></td>
                    <td><button type="sumit">Actualizar</button></td>
                    <td><a href="http://localhost/Dispensador/?C=ControladorAdministrador&M=eliminarempleado&id=<?= $Empleado['idEmpleado'] ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
        </table>
        </div>
  </div>
  <button>Generar Reporte</button>
</body>
</html>
