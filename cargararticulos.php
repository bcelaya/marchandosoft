<?php
// debe de estar logueado para poder acceder aquí así que control de sesión al canto
require_once 'controlsesion.php';
// conectamos a la BBDD
require_once 'config.php';
require_once 'articulos.php';


<?php
for ($i= 0; $i<$longitud;$i++){
    // así facilitamos el asignar el id
    $temp = $comidas[$i]['idArticulos'];
    echo "<button type='button' class='btn btn-info primary' id='item-$temp'>".$comidas[$i]['nombreart']."</button>";
}
?>
</div>
