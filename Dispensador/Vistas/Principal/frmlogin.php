<head>
  <title>Login</title>
  <link rel="stylesheet" href="http://localhost/Dispensador/estilos/principal/stylelogin.css">
</head>
<body style="width= 300px; height : 300px; background:
linear-gradient(rgba(5,7,12,0.75),rgba(5,7,12,0.75)),
url('fondo4.jpg'); background-size: cover;">
  <section class="form-login">
    <h5>Login</h5>
    <form action="http://localhost/Dispensador/?C=ControladorLogin&M=acceder" method="POST">

      <input class="controls" type="text" name="txtusuario" placeholder="Usuario" required>
      <input class="controls" type="password" name="txtpassword" placeholder="Contraseña" required>
      <input class="buttons" type="submit" name="acceder" value="Acceder" required>
    </form>
    <p><a href="http://localhost/Dispensador/?C=ControladorLogin&M=Registro" >Registrarme</a></p>
  </section>
</body>
