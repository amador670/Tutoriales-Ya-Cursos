<?php

require "archivo-php.php";

if($_POST){
 //Si existe la variable $imagenes sera igual al archivo seleccionado
 if($imagen = $_FILES["subirArchivo"]["name"]){
  echo "<style>form{background-image: url($imagen)}</style>";
  setcookie("imagen-de-fondo", "url($imagen)", time()+60*60*24*365, "/");
 } 
 elseif($imagen == ""){
  echo "<style>form{background-image: url(img.jpg)}</style>";
  setcookie("imagen-de-fondo", "url(img.jpg)", time()+60*60*24*365, "/");
 }

 if($_POST["radio"]=="negro"){
  echo "<style>form{color: #000000;}</style>";
  setcookie("letras-de-fondo", "#000000", time()+60*60*24*365, "/");
 } 
 elseif($_POST["radio"]=="blanco"){
  echo "<style>form{color:#FFFFFF;}</style>";
  setcookie("letras-de-fondo", "#FFFFFF", time()+60*60*24*365, "/");
 } 
 elseif($_POST["radio"]==""){
  setcookie("letras-de-fondo", "#000000", time()+60*60*24*365, "/");
 }
}
?>