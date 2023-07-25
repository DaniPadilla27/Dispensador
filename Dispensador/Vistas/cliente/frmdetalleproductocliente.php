<body >  <body style="width= 300px; height : 300px; background:
linear-gradient(rgba(5,7,12,0.75),rgba(5,7,12,0.75)),
url('fondo4.jpg'); background-size: cover;">
    

<link rel="stylesheet" href="http://localhost/Dispensador/estilos/principal/detalleproducto.css">
<div>
<h1>Detalle Producto </h1>

</div>



  <?php
// Suponiendo que $productos contiene los datos de los productos obtenidos del modelo
// Ejemplo: $productos = $productoModel->ConsultaProductos();

// Verificamos que haya productos para mostrar
if (!empty($Detalleproductos)) {
    ?>
    <section class="container-products">
        <h1 class="heading-1"></h1>
    </section>

    <div class="grid">
    <?php
    // Iteramos sobre los productos y mostramos cada uno
    foreach ($Detalleproductos as $producto) {
      $imgFinal='data:image/jpeg;base64,'.base64_encode($producto['imagen']);    
        ?>

        <div class="items">
            <!-- Suponiendo que el campo "Imagen" en la base de datos contiene la ruta de la imagen -->
            <a href=""><img src="<?php echo $imgFinal; ?>"></a>
            <div class="info">
                <h3><?php echo $producto['NombreProducto']; ?></h3>
                <!-- Suponiendo que el campo "Descripcion" contiene la descripción del producto -->
                <p><?php echo $producto['DescripcionProducto']; ?></p>
                <!-- Suponiendo que el campo "Precio" contiene el precio del producto -->
                <div class="precio">
                    <p>$<?php echo $producto['PrecioVenta']; ?></p>
                </div>
                <button onclick="showAlert()">Comprar</button>
                <script>
      function showAlert() {
        alert("Compra realizada con exito.");
      }
    </script>

                <a href="http://localhost/Dispensador/?C=controladorcliente&M=regresarcliente" class="back-button" onclick="history.back();">&#8592; Regresar</a>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
    <?php
} else {
    echo "<p>No hay productos disponibles.</p>";
}
?>

</body>