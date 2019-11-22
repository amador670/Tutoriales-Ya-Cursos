addEventListener("load", inicio, false);

function inicio() {
  document.getElementById("text1").addEventListener("focus", textFocus1, false);
  document.getElementById("text1").addEventListener("blur", textBlur1, false);
  document.getElementById("text2").addEventListener("focus", textFocus2, false);
  document.getElementById("text2").addEventListener("blur", textBlur2, false);
  document.getElementById("borrar").addEventListener("focus", borrarFocus, false);
  document.getElementById("borrar").addEventListener("blur", borrarBlur, false);
  document.getElementById("enviar").addEventListener("focus", enviarFocus, false);
  document.getElementById("enviar").addEventListener("blur", enviarBlur, false);
  document.getElementById("probar").addEventListener("focus", probarFocus, false);
  document.getElementById("probar").addEventListener("blur", probarBlur, false);
}
function textFocus1() {    
  document.getElementById("text1").style.color="#00a7ff";
}
function textBlur1() {
  document.getElementById("text1").style.color="#29d800";
}
function textFocus2() {
  document.getElementById("text2").style.color="#00a7ff";
}
function textBlur2() {
  document.getElementById("text2").style.color="#29d800";
}
function borrarFocus() {
  document.getElementById("borrar").style.color="#ff0000";
  document.getElementById("borrar").style.borderStyle="double";
  document.getElementById("borrar").style.borderColor="#00a7ff";
}
function borrarBlur() {
  document.getElementById("borrar").style.color="#9e03ff";
  document.getElementById("borrar").style.borderColor="#29d800";
}
function enviarFocus() {
  document.getElementById("enviar").style.color="#ff0000";
  document.getElementById("enviar").style.borderStyle="double";
  document.getElementById("enviar").style.borderColor="#00a7ff";
}
function enviarBlur() {
  document.getElementById("enviar").style.color="#9e03ff";
  document.getElementById("enviar").style.borderColor="#29d800";    
}
function probarFocus() {
  document.getElementById("probar").style.color="#ff0000";
  document.getElementById("probar").style.borderStyle="double";
  document.getElementById("probar").style.borderColor="#00a7ff";        
}
function probarBlur() {
  document.getElementById("probar").style.color="#9e03ff";
  document.getElementById("probar").style.borderColor="#29d800";
}