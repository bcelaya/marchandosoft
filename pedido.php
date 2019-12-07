<?php
class pedido{
    private $idpedidos;
    private $idArticulos;
    private $cantidad_pedida;
    private $cantidad_servida;

    function __construct($idpedidos,$idArticulos) {
        $sql = "SELECT * FROM pedidos WHERE idpedidos=$idpedidos AND idArticulos=$idArticulos";
        $link = mysqli_connect('localhost', 'brunozm', '123', 'marchando') or die('No se puede conectar con la BBDD.');
        $resultset = mysqli_query($link,$sql) or die ("no se ha podido hacer la consulta");
        while($row=mysqli_fetch_array($resultset)){
            $this->
        }
    }
    function getIdpedidos() {
        return $this->idpedidos;
    }

    function getIdArticulos() {
        return $this->idArticulos;
    }

    function getCantidad_pedida() {
        return $this->cantidad_pedida;
    }

    function getCantidad_servida() {
        return $this->cantidad_servida;
    }

    function setIdpedidos($idpedidos) {
        $this->idpedidos = $idpedidos;
    }

    function setIdArticulos($idArticulos) {
        $this->idArticulos = $idArticulos;
    }

    function setCantidad_pedida($cantidad_pedida) {
        $this->cantidad_pedida = $cantidad_pedida;
    }

    function setCantidad_servida($cantidad_servida) {
        $this->cantidad_servida = $cantidad_servida;
    }


    
}


