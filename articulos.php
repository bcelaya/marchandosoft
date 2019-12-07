<?php
require 'config.php';
class Articulos{
    private $idart;
    private $nomart;
    private $pvpart;
    private $tipoart;
    private $stock;

//Setters
public function setNomart($nomart){
    $this->nomart = $nomart;
}

public function setPvpart($pvpart){
    $this->pvpart = $pvpart;
}

public function setTipoart($tipoart){
    $this->tipoart = $tipoart;
}

public function setStock($stock){
    $this->stock = $stock;
}

//Getters
public function getNomart(){
    return $this->nomart;
}

public function getPvpart(){
    return $this->pvpart;
}

public function getTipoart(){
    return $this->tipoart;
}

public function getStock(){
    return $this->stock;
}


 function __construct($id=0){
     if ($id==0){
         return $this;
     }
     else{
         $querysql = "SELECT idArticulos,nombreart,pvpart,tipoart,stock FROM Articulos WHERE idArticulos='$id'";
         //echo "<br>esto es el query que estamos realizando: ".$querysql."<br><br>";
         $link = mysqli_connect('localhost', 'brunozm', '123', 'marchando') or die('No se puede conectar con la BBDD.');
         $resultset = mysqli_query($link,$querysql) or die ("no se ha podido hacer la consulta");
         //echo "<br>Aquí viene el var_dump de la variable resultset: " .var_dump($resultset);
         while ($row = mysqli_fetch_array($resultset,MYSQLI_NUM)) {
            $this->idart=$id;
            $this->nomart=$row[1];
            $this->pvpart=$row[2];
            $this->tipoart=$row[3];
            $this->stock=$row[4];
        }
        return $this;
         
     }
 }

 function json(){
     return '{"id":"$this->idart","nomart":"$this->nomart","pvpart":"$this->pvpart","tipoart":"$this->tipoart","stock":"$this->stock"}';
 }
 
 
 }