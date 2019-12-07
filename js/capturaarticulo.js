function capturaarticulo (item){
    //capturamos los articulos que disponemos
    var articulos = document.getElementsByClassName("articulo");
    //capturamos las lineas de pedido
    var lineaspedido = document.getElementsByClassName("lineapedido");
    if (lineaspedido.namedItem == item){
        console.log("está este articulo añadido");
    }
    else{
        console.log("no lo está así que lo creo");
        $(item).append("<tr><td>soy un articulo</td></tr>");
    }
}