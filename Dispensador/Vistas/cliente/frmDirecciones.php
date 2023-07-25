
    <title>Terminar Compra</title>
    <link rel="stylesheet" href="http://localhost/Dispensador/Estilos/cliente/styleDireccion.css">
</head>
<body>
    <form method="POST" action="http://localhost/Dispensador/?C=controladorDireccion&M=RegistroD" method="POST">
    <h2>Terminar compra</h2>
    <section class="form-register">
        <h4>Direccion</h4>
        <input class="controls" type="text" name="Estado" id="estado" placeholder="Ingrese su Estado">
        <input class="controls" type="text" name="Municipio" id="municipio" placeholder="Ingrese su Municipio">
        <input class="controls" type="text" name="Colonia" id="colonia" placeholder="Ingrese su Colonia">
        <input class="controls" type="text" name="Referencia" id="referencia" placeholder="Ingrese alguna referencia">
    </form>
        <input class="botons" type="submit" value="Guardar y Continuar">
        <p><a href="http://localhost/Dispensador/?C=Controladorcliente&M=principalcliente">Regresar</a></p>
      </section>
    
</body>
