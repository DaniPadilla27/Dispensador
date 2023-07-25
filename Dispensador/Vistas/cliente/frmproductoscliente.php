<!DOCTYPE html>
<html>
<head>
  <title>Planeta Mascotas</title>
  <link rel="stylesheet" href="http://localhost/Dispensador/Estilos/principal/syle.css">
  <link rel="stylesheet" href="http://localhost/Dispensador/Estilos/principal/productos.css">

  <body style="width= 300px; height : 300px; background:
linear-gradient(rgba(5,7,12,0.75),rgba(5,7,12,0.75)),
url('fondo4.jpg'); background-size: cover;">


  <header>
    <h1>Planeta Mascotas</h1>
  </header>
   

  <nav>
    <ul>

      <li><a href="http://localhost/Dispensador/?C=Controladorcliente&M=iniciocliente">Inicio</a></li>
      <li><a href="http://localhost/Dispensador/?C=Controladorcliente&M=principalcliente">Productos</a></li>
      <li><a href="http://localhost/Dispensador/?C=controladorprincipal&M=Productos">Cerrar Sesión</a></li>

      
    </ul>
    
  </nav>

  <section class="todo">


  <?php
// Suponiendo que $productos contiene los datos de los productos obtenidos del modelo
// Ejemplo: $productos = $productoModel->ConsultaProductos();

// Verificamos que haya productos para mostrar
if (!empty($productos)) {
  ?>
  <section class="container-products">
      <h1 class="heading-1"></h1>
  </section>
      <center><h3>Categorías</h3></center>
      <?php
          // Aquí debes realizar la consulta para obtener las categorías desde la base de datos
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "bddispensador";

          // Crear conexión
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Verificar conexión
          if ($conn->connect_error) {
              die("La conexión falló: " . $conn->connect_error);
          }

          // Consulta para obtener las categorías
          $sql = "SELECT IdCategoria,Categoria FROM tblcategoria";
          $result = $conn->query($sql);
          ?>
  <form action="http://localhost/Dispensador/?C=controladoraltaproductos&M=MostrarCatalogocliente" method="POST">
      <center><label for="Categoria " class="category-label">Selecciona la categoría</label>
       
      <select name="selectCategoria">
      <?php
         // Llenar las opciones del menú desplegable con los datos de la base de datos
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $selected = (isset($_POST['selectCategoria']) && $_POST['selectCategoria'] == $row['IdCategoria']) ? 'selected' : '';
                  echo '<option value="' . $row['IdCategoria'] . '" ' . $selected . '>' . $row['Categoria'] . '</option>';
              }
          }
          
          // Cerrar la conexión
          $conn->close();
          ?>
          </center>
      </select>
      <button type="submit">Ir</button>
  </form>

  <div class="grid">
  <?php
  // Iteramos sobre los productos y mostramos cada uno
  foreach ($productos as $producto) {
    $imgFinal='data:image/jpeg;base64,'.base64_encode($producto['imagen']);    
      ?>

      <div class="items">
          <!-- Suponiendo que el campo "Imagen" en la base de datos contiene la ruta de la imagen -->
          <a href="http://localhost/Dispensador/?C=controladoraltaproductos&M=MostrarDetalleProductoCliente&id=<?= $producto['Idproducto'] ?>"><img src="<?php echo $imgFinal; ?>"></a>
          <div class="info">
              <h3><?php echo $producto['NombreProducto']; ?></h3>
              <!-- Suponiendo que el campo "Descripcion" contiene la descripción del producto -->
              <p><?php echo $producto['DescripcionProducto']; ?></p>
              <!-- Suponiendo que el campo "Precio" contiene el precio del producto -->
              <div class="precio">
                  <p>$<?php echo $producto['PrecioVenta']; ?></p>
              </div>
              <form action="http://localhost/Dispensador/?C=controladorcliente&M=regresarcliente" method="POST">
              <button onclick="showAlert()">Comprar</button>
              </form>
          </div>
      </div>
      <?php
  }
  ?>
  </div>
  <script>
      function showAlert() {
        alert("Compra realizada con exito.");
      }
    </script>
  <?php
} else {
  echo "<p>No hay productos disponibles.</p>";
}
?>




</section>




<footer class="redesociales">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <section class="buttons">
      <a href="https://www.facebook.com/profile.php?id=100094976140902&mibextid=ZbWKwL" class="fa fa-facebook"></a>


    </section>
  
</footer>


  <footer class="Piedepagina">
    
    <p> &copy; Sitio desarrollado por PM-Paneta-Mascotas 2023  <?php date('d-m-Y H:i') ?> </p>

</footer>

  <!-- Aquí puedes agregar el resto del contenido de tu página -->

</body>
</html>
