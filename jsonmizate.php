<?php 
require_once 'config.php';
$sqljson = "SELECT * FROM Articulos";
$articulos = array();
$resultsqljson = mysqli_query($link,$sqljson);
print_r($resultsqljson);
echo "<br>Aquí va lo que saco del mysqli_fetch_array:<br>";
// esto es simplemente para visualizar
while ($row = mysqli_fetch_array($resultsqljson,MYSQLI_NUM)){
    printf ("ID: %s , NOMBRE: %s , PVPART: %s , TIPO: %s STOCK: %s <br>",$row[0],$row[1],$row[2],$row[3],$row[4]);
    
    //array_push($objetos,$obj);
}



?>
