<?php
// Incluimos el fichero de conexión
require_once "config.php";
$_tipoart = $_GET["tipoart"];
// $_ficha = 'bebidas';
$sql = "SELECT * FROM Articulos WHERE tipoart='$_tipoart'";
$result = mysqli_query($link,$sql);
var_dump($_tipoart);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>MarchandoSoft - modificación artículo </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/modificacionarticulos.css"
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
            echo "<tr><td><a href='ficha.php?idArticulo='".$row['idArticulos']."</a>" . $row["idArticulos"]. "</td><td>" . $row["nombreart"]. "</td><td>" . $row["pvpart"]. "</td><td>" . $row["tipoart"] . "</td><td>" . $row["stock"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
    </table>
    <p class="opciones">
        <a href="centro.php"><button type="button" class="btn btn-primary">Volver a centro</button></a>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <select name="tipoart">
            <option value="comidas">Comidas</option>
            <option value="bebidas">Bebidas</option>
            <option value="postre">Postre</option>
            <option value="cafe">Cafe</option>
        </select>
        <a href=""><button type="submit" class="btn btn-warning">Filtrar por tipo</button></a>
    </p>
    </div>
  </div>
</div>
    
</body>
</html>