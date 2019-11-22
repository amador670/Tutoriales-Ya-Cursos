<?php
if(!$_REQUEST["nombre"]){
  header("Location: index.php?error_nombre=1");
} 

if(strlen($_REQUEST["year"]) < 4 || strlen($_REQUEST["year"]) > 4){
  header("Location: index.php?error_date=1");
}

if(strlen($_REQUEST["dia"]) < 2 || strlen($_REQUEST["dia"]) > 2){
  header("Location: index.php?error_date=1");
}

if(strlen($_REQUEST["mes"]) < 2 || strlen($_REQUEST["mes"]) > 2){
  header("Location: index.php?error_date=1");
}

require "formulario-respuesta.php";
function mensaje(){
  echo "Bienvenido " . $_REQUEST["nombre"] . "<br>";

  if(is_numeric($_REQUEST["dia"]) && is_numeric($_REQUEST["mes"]) && is_numeric($_REQUEST["year"])){
    if(checkdate($_REQUEST["mes"], $_REQUEST["dia"], $_REQUEST["year"])){
      echo "La fecha ingresada es correcta" . "<br>";

      printf("%02d/%02d/%d", $_REQUEST["dia"], $_REQUEST["mes"], $_REQUEST["year"]);
    } 
  } else{
    header("Location: index.php?error_date=1");
  }
}

?>