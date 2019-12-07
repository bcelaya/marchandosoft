<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'brunozm');
define('DB_PASSWORD', '123');
define('DB_NAME', 'marchando');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: No puedo conectar a la BBDD. " . mysqli_connect_error());
}
else{
    echo("Conecto con éxito :-)");
}
?>