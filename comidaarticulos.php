<?php
require_once 'articulos.php';
// Incluimos el fichero de conexión
require_once 'config.php';
// Incluimos sesión
require_once 'controlsesion.php';
// Empezamos por las comidas
$_tipoart = "comidas";
// $_ficha = 'bebidas';
$sql = "SELECT * FROM Articulos WHERE tipoart='$_tipoart'";
$result = mysqli_query($link,$sql);
var_dump($_tipoart);
//creamos boton de comida con los items que hay
if (mysqli_num_rows($result) > 0) {
    // output data of each row ?>
    <table class="table-striped table-bordered" id="tablacomida">
  <?php  while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='art'><td id='idart'>".$row['idArticulos']."</td><td id='nomart'>" . $row["nombreart"]. "</td><td id='pvpart'>" . $row["pvpart"]. "</td><td id='tipoart'>" . $row["tipoart"] . "</td><td id='stock'>" . $row["stock"] . "</td></tr>";
    }
} else {
    echo "0 results";
}
?></table>