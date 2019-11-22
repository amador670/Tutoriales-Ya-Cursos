<?php

require "archivo-php.php";

if($_POST){
 if($_REQUEST["radio"]=="img1"){
  echo "<style>form{background-image: url(img1.jpg)}</style>";

  setcookie("imagen-de-fondo", "url(img1.jpg)", time()+60*60*24*365,"/");
  setcookie("letras-de-fondo", "#000000", time()+60*60*24*365, "/");
 } 
 elseif($_REQUEST["radio"]=="img2"){
  echo "<style>form{background-image: url(img2.jpg)}</style>";

  setcookie("imagen-de-fondo", "url(img2.jpg)", time()+60*60*24*365,"/");
  setcookie("letras-de-fondo", "#000000", time()+60*60*24*365, "/");
 } 
 elseif($_REQUEST["radio"]=="img3"){
  echo "<style>form{background-image: url(img3.jpg)}</style>";

  setcookie("imagen-de-fondo", "url(img3.jpg)", time()+60*60*24*365,"/");
  setcookie("letras-de-fondo", "#000000", time()+60*60*27*365, "/");
 } else{
  echo "<style>form{background-image: url(img.jpg)}</style>";

  setcookie("imagen-de-fondo", "url(img.jpg)", time()+60*60*24*365,"/");
  setcookie("letras-de-fondo", "#000000", time()+60*60*27*365, "/");
 }
}
?>