window.onload=funcion;
function funcion(){
var a = document.createElement("p");
var nodo = document.createTextNode("a ea facilis vel incidunt dita! Ipsa nam molestiae dicta quam, similique fuga voluptas error quas in maxime facere!");
a.appendChild(nodo);	 
var divo = document.getElementById("padre");
divo.appendChild(a);

}