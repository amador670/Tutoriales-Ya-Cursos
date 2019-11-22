function bienvenida() {
 alert("Bienvenido al ejemplo de JavaScript en un archivo externo.");
}

function numerosIngresados() { 
 var num1=parseInt(prompt("Ingrese el primer numero")),
     num2=parseInt(prompt("Ingrese el segundo numero"));

 if(isNaN(num1) || isNaN(num2)) { 
  alert("Ingrese los numeros correctamente.");
  return numerosIngresados();
 }
 else if(num1 > num2) {
  document.write("El numero mayor es " + num1);
 }
 else {
  document.write("El numero mayor es " + num2);
 }
}