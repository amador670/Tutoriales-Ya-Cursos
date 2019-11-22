<?php
session_start();
if ($_POST) {
  $_SESSION["usuario"]=$_REQUEST["usuario"];  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
  <style>
    body{
      text-align: justify;
    }
  </style>
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Variable de sesion</h1>
    <h3>$_session[] y session_start().</h3>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr>

    <h3 style="font-family: Calibri">
      <?php     
      if(isset($_SESSION["usuario"])){
        echo "Inicio sesión correctamente " . $_SESSION["usuario"];     
      } else{
        echo "Error al conectar, vuelva a iniciar sesion.";
      }
      ?>      
    </h3>

  </div>

</body>
</html>