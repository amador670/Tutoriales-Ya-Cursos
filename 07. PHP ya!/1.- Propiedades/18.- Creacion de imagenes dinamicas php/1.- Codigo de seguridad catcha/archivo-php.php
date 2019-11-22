<?php

session_start();
if($_POST) {
  if($_REQUEST["codigoSeguridad"]==$_SESSION["numeroAleatorio"]) {
    header("Location: index.php?sucess=1");
  } 
  elseif($_REQUEST["codigoSeguridad"]!=$_SESSION["numeroAleatorio"]){
    header("Location: index.php?error=1");
  }
}
?>
