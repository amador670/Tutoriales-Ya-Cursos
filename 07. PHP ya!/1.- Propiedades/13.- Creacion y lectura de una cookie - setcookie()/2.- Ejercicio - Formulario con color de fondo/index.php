<?php

require "archivo-php.php";

if($_POST){
 if($_POST["radio"] == "rojo"){
  echo "<style>form{background:#ff7da0;}</style>";
  setcookie("background", "#ff7da0", time()+60*60*24*365,"/");
 } 
 elseif($_POST["radio"] == "verde"){
  echo "<style>form{background:#7dffcd;}</style>";
  setcookie("background", "#7dffcd", time()+60*60*24*365,"/");
 } 
 else{
  echo "<style>form{background:#a3e7fc;}</style>"; 
  setcookie("background", "#a3e7fc", time()+60*60*24*365,"/");
 }
}
?>