function recogidadatos(){
// empezamos recogiendo los valores (nombre,pvp,tipo y stock)
var valornomart = document.getElementById("nomart").innerText;
var valorpvpart = document.getElementById("pvpart").innerText;
var valortipoart = document.getElementById("tipoart").innerText;
var valorstock = document.getElementById("stock").innerText;
// recogemos los valores que se pretenden modificar
var modnom = document.getElementById("modnom").value;
var modpvp = document.getElementById("modpvp").value;
var modtipo = document.getElementById("modtipo").value;
var modstock = document.getElementById("modstock").value;
// comparamos los valores de las variables para ver cuales cambian y asi proceder a montar el query sql necesario
cambionomart = false;
cambiopvpart = false;
cambiotipoart = false;
cambiostock = false;
// Si los valores no coinciden ponemos el flag a true para saber que hay que incluirlo en el query sql de modificación
if (valornomart!=modnom){
    cambionomart = true;
}
if (valorpvpart!=modpvp){
    cambiopvpart = true;
}
if (valortipoart!=modtipo){
    cambiotipoart = true;
}
if (valorstock!=modstock){
    cambiostock = true;
}

console.log("cambionomart: "+cambionomart+" , cambiopvpart: "+cambiopvpart+" , cambiotipoart: "+cambiotipoart+" ,cambiostock: "+cambiostock);


}