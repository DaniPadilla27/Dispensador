-<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="http://localhost/Dispensador/estilos/usuario/altaempleados.css">
</head>
<body style="width= 300px; height : 300px; background:
linear-gradient(rgba(5,7,12,0.75),rgba(5,7,12,0.75)),
url('fondo4.jpg'); background-size: cover;">
<form class="form" action="http://localhost/Dispensador/?C=controladoraltaproductos&M=alta" method="POST" enctype="multipart/form-data">

<section class="form-register">
    <h4>Alta Producto</h4>

    <input class="controls" type="text" name="txtnombreProducto" id="" placeholder="Nombre Producto" required>
    <input class="controls" type="text" name="txtDescripcion" id="" placeholder="Descripcion" required>
    <input class="controls" type="text" name="txtPrecio" id="" placeholder="Precio" required pattern="[0-9]+">
    <input class="controls" type="text" name="txtstock" id="" placeholder="Stock" required pattern="[0-9]+">
    <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="txtCategoria">
            <option value="1">Razas Pequeñas</option>
            <option value="2">Razas Grandes</option>
            </select>
        </div> 
    <input class="controls" type="file" name="txtimagen" id="" placeholder="" required>
    <input class="botons" type="submit" value="Guardar" required>
</form>
    
    <p><a href="http://localhost/Dispensador/?C=Controladorcliente&M=regresar">Regresar</a></p>
  </section>

        <div>  <h1>registados</h1>
        <table class="centered-table">
            

                <tr>

                    <th></th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>stock</th>
                    <th>Categoria</th>
                    <th>imagen</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>

                <?php while($producto=$productos->fetch_assoc()){ 
                    
                    $imgFinal='data:image/jpeg;base64,'.base64_encode($producto['imagen']);                  
                    ?>
                <tr>
                <form method="POST" action="http://localhost/Dispensador/?C=Controladoraltaproductos&M=ActualizarProducto" method="POST">
                    
                    <td><input  type="hidden" name="id" value="<?=$producto['Idproducto']?>"></td>
                    <td><input type="text" name="txtnombreProducto" value="<?=$producto['NombreProducto']?>"></td>
                    <td><input type="text" name="txtDescripcion" value="<?=$producto['DescripcionProducto']?>"></td>
                    <td><input type="text" name="txtPrecio"  value=<?=$producto['PrecioVenta']?>></td>
                    <td><input type="text" name="txtstock" value=<?=$producto['stock']?>></td>
                    <td><input type="text"name="txtCategoria" value=<?=$producto['Categoria']?>></td>
                    <td><img src="<?=$imgFinal?>" style="max-width: 50px; height:50px"></td>
                    

                    <td><button type = "submit">Actualizar</button></td>
                    <td><a href="http://localhost/Dispensador/?C=Controladoraltaproductos&M=eliminarProducto&id=<?= $producto['Idproducto'] ?>">Eliminar</a></td>
                    </form>
                </tr>
                <?php } ?>
        </table>
    </div>
    <form action="http://localhost/Dispensador/?C=controladorReportes&M=reporteProductos" method="POST">

<button type="submit" name="btnreporte" value="btnreporte" class="generate-report-button">GENERAR REPORTE</button>

        </form>

</body>
</html>

