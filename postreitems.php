<?php
// debe de estar logueado para poder acceder aquí así que control de sesión al canto
require_once 'controlsesion.php';
// conectamos a la BBDD
require_once 'config.php';
$sql = "SELECT * FROM Articulos WHERE tipoart='postre'";
$result = mysqli_query($link,$sql);
$num = mysqli_num_rows($result);
for ($i = 0; $i < $num; $i++)
{
    $postre[] = mysqli_fetch_assoc($result);
}
mysqli_close($conn);
//print_r($myArray);
// longitud del array
$longitud = count($postre);?>
<div id="itemspostre">
<?php
for ($i= 0; $i<$longitud;$i++){
    // así facilitamos el asignar el id
    $temp = $postre[$i]['idArticulos'];
    echo "<button type='button' class='btn btn-info primary articulo' id=item-$temp onclick='capturaarticulo(item-$temp)'>".$postre[$i]['nombreart']."</button>";
}
?>
</div>