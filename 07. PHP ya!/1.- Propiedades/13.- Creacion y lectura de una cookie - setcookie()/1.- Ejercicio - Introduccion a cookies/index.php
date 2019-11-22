<?php

require "archivo-php.php";

if($_POST){
 if($_POST["radio"] == "rojo"){
  echo "<style>body{background-color:#ff7da0;}</style>";
  setcookie("background-color", "#ff7da0", time()+60*60*24*365,"/");
 } 
 elseif($_POST["radio"] == "verde"){
  echo "<style>body{background-color:#7dffcd;}</style>";
  setcookie("background-color", "#7dffcd", time()+60*60*24*365,"/");
 } 
 else if($_POST["radio"] == "azul"){
  echo "<style>body{background-color:#a3e7fc;}</style>"; 
  setcookie("background-color", "#a3e7fc", time()+60*60*24*365,"/");
 }  
 else{
  echo "<style>body{background-color:#f8f8f8;}</style>"; 
  setcookie("background-color", "#f8f8f8", time()+60*60*24*365,"/");
 }
} 

?>
