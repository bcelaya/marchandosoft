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
contadorcambios = 0;
// Si los valores no coinciden ponemos el flag a true para saber que hay que incluirlo en el query sql de modificación
if (valornomart!=modnom){
    cambionomart = true;
    contadorcambios = contadorcambios + 1;
}
if (valorpvpart!=modpvp){
    cambiopvpart = true;
    contadorcambios = contadorcambios + 1;
}
if (valortipoart!=modtipo){
    cambiotipoart = true;
    contadorcambios = contadorcambios + 1;
}
if (valorstock!=modstock){
    cambiostock = true;
    contadorcambios = contadorcambios + 1;
}

var query2 = '';
// SQL QUERY 
if (cambionomart===true){
    query2 = query2 + " 'nombreart='"+modnom+"'";
    if (contadorcambios>1){
        query2= query2 + ", ";
    }
}
if (cambiopvpart===true){
    query2 = query2 + " 'pvpart='"+modpvp+"'";
    if (contadorcambios>1){
        query2= query2 + ", ";
    }
}
if (cambiotipoart===true){
    query2 = query2 + " 'tipoart='"+modtipo+"'";
    if (contadorcambios>1){
        query2= query2 + ", ";
    }
}
if (cambiostock===true){
    query2 = query2 + " 'stock='"+modstock+"'";
}

// SQL QUERY 
var query = "UPDATE Articulos SET"
query = query + query2;
//por el diseño que hemos hecho puede pasar que el último artículo tenga una coma, aquí la quitamos del final si existe
//primero quitamos espacios en blanco del principio y del fin
query = query.trim();
//medimos cuanto largo es el string
var tamanyoquery = query.length;
//ahora recortaremos si el query termina en coma
var ultimocaracter = query.lastIndexOf("'");
if ((tamanyoquery-2)==(ultimocaracter)){
    query = query.slice(0,ultimocaracter-1);

}
query = query + ";";
console.log("resultado query: "+query); 

// Información de debug
console.log("cambionomart: "+cambionomart+" , cambiopvpart: "+cambiopvpart+" , cambiotipoart: "+cambiotipoart+" ,cambiostock: "+cambiostock);


}