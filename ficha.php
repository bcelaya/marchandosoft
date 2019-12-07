<?php
// Incluimos el fichero de conexión
require_once "config.php";
require_once "controlsesion.php";
$_ficha = $_GET["idArticulos"];
$sql = "SELECT * FROM Articulos WHERE `idArticulos`=$_ficha";
$result = mysqli_query($link,$sql);
//var_dump($_ficha);
//printf("Info debug: %s",$_ficha);
//printf("info debug2: %s",$sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>MarchandoSoft - modificación artículo </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/modificacionarticulos.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/editararticulo.js"></script>
  <script src="/js/datosarticuloamodificar.js"></script>
  <script src="/js/recogidadatos.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1 class="text-center">Modificación artículo</h1>
  <div class="row">
    <div class="col-sm-12 text-center listadoart">
    <table class='table-stripped table-bordered text-center'>
    <tr><th>ID Artículo</th><th>Nombre artículo</th><th>PVP artículo</th><th>Tipo</th><th>Stock</th></tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td id='idart'><a href='ficha.php?idArticulo='".$row['idArticulos']."</a>" . $row["idArticulos"]. "</td><td id='nomart'>" . $row["nombreart"]. "</td><td id='pvpart'>" . $row["pvpart"]. "</td><td id='tipoart'>" . $row["tipoart"] . "</td><td id='stock'>" . $row["stock"] . "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
    </table>
    <p class="opciones">
        <a href="centro.php"><button type="button" class="btn btn-primary">Volver a centro</button></a>
        <select name="filtrotipo">
            <option value="comidas">Comidas</option>
            <option value="bebidas">Bebidas</option>
            <option value="postres">Postres</option>
            <option value="cafes">Cafes</option>
        </select>
        <a href=""><button type="button" class="btn btn-warning">Filtrar por tipo</button></a>
    </p>
    <div class="editar" style="display:none;">
Nombre artículo:<br>
  <input type="text" id="modnom" name="modnom">
  <br>
  PVP ud:<br>
  <input type="number" step="0.5" id="modpvp" name="modpvp">
  <br><br>
  Tipo
  <select name="filtrotipo" id="modtipo">
            <option value="comidas">Comidas</option>
            <option value="bebidas">Bebidas</option>
            <option value="postres">Postres</option>
            <option value="cafes">Cafes</option>
  </select><br>
  Stock<br>
  <input type="number" step="1" id="modstock" name="modstock"><br><br>
        <input type="submit" value="Enviar"><br><br>
</div>

<button type="button" class="btn btn-primary" id="edit">Editar artículo</button>
    </div>
  </div>
</div>
    
</body>
</html>