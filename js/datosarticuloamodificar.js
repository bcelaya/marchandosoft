function datosarticuloamodificar(){
// empezamos recogiendo los valores (nombre,pvp,tipo y stock)
var valornomart = document.getElementById("nomart").innerText;
var valorpvpart = document.getElementById("pvpart").innerText;
var valortipoart = document.getElementById("tipoart").innerText;
var valorstock = document.getElementById("stock").innerText;
// ahora lo que hacemos es ponerlos en la parte que requerimos para editar, capturamos nodo e introducimos valor
var modnom = document.getElementById("modnom").value=valornomart;
var modpvp = document.getElementById("modpvp").value=parseFloat(valorpvpart);
var modtipo = document.getElementById("modtipo").value=valortipoart;
var modstock = document.getElementById("modstock").value=parseInt(valorstock);
}