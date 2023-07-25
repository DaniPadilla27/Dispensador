
  <link rel="stylesheet" href="http://localhost/Dispensador/estilos/principal/styleRegistro.css">
  <title>Registro</title>

  <body style="width= 300px; height : 300px; background:
linear-gradient(rgba(5,7,12,0.75),rgba(5,7,12,0.75)),
url('fondo4.jpg'); background-size: cover;">
    

<form method="POST" action="http://localhost/Dispensador/?C=ControladorLogin&M=Registrado" method="POST">
  <section class="form-register">
    <h4>Registro</h4>
    <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre" required>
    <input class="controls" type="text" name="apellidoP" id="apellidos" placeholder="Ingrese su Apellido Paterno" required>
    <input class="controls" type="text" name="apellidoM" id="apellidos" placeholder="Ingrese su Apellido Materno" required>
    <input class="controls" type="text" name="Usuario" id="nombres" placeholder="Crea tu usuario" required>
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
    <input class="controls" type="password" name="password" id="correo" placeholder="Ingrese su Contraseña" required>
    <input class="controls" type="text" name="Telefono" id="telefono" placeholder="Telefono" required>
    <input class="controls" type="date" name="fecha" id="fecha" required>
    <input class="botons" type="submit" value="Registrar" required>
    <p><a href="http://localhost/Dispensador/?C=ControladorLogin&M=sesion">¿Ya tengo Cuenta?</a></p>
  </section>
  </form>

  </body>

