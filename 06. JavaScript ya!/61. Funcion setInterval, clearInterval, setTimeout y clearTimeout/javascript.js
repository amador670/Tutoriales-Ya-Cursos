
function inicio(){
 var mostrarMensaje;
 mostrarMensaje = setInterval(presionarBoton, 1000);
}
/*Si se usa setTimeout, se suma al darle click al boton. Para esto se añade el siguiente codigo a la funcion:
document.getElementById('boton1').addEventListener('click', presionarBoton, false);*/

function presionarBoton(){  
 document.getElementById("remplazo").innerHTML = "Este es un mensaje programado que contiene ";

 document.getElementById("numero").style.display="inline";

 var numero = parseInt(document.getElementById("numero").innerHTML);  
 numero++;

 document.getElementById("numero").innerHTML = numero + " segundos después de haber dado click.";
}

var alertaBienvenida = setInterval(function alertaBienvenida(){
 alert("Bienvenido, usted lleva mas de 10 segundos disfrutando de nuestro sitio web");
}, 10000);


function cancelarBienvenida(){
 clearInterval(alertaBienvenida);
}

/*----------CODIGO DE FORMA TOTALMENTE RESUMIDA----------*/
/*var minutos = setInterval(function presionarBoton(){  
 document.getElementById("remplazo").innerHTML = "Este es un mensaje programado que contiene ";

 document.getElementById("numero").style.display="inline";

 var numero = parseInt(document.getElementById("numero").innerHTML);  
 numero++;

 document.getElementById("numero").innerHTML = numero + " segundos después de haber dado click.";
}, 1000);

var alertaBienvenida = setInterval(function alertaBienvenida(){
 alert("Bienvenido, usted lleva mas de 10 segundos disfrutando de nuestro sitio web");
}, 10000);

function cancelarBienvenida(){
 clearInterval(alertaBienvenida);
}

*/
