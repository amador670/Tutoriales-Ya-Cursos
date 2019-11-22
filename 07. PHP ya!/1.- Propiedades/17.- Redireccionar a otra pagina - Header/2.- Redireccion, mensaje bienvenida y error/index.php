<?php
function validarEdad(){
  if(isset($_REQUEST["error"])){
    $error = "Debe ser mayor de edad para continuar en nuestro sitio web.";   
    echo "<h3 style='
    font-family:FangSong; 
    color:#ff2f2f;
    text-align:center;
    border:1px solid red;
    padding:10px;
    background-color:#ffe8e8;
    '>" . $error . "</h3>";

  }
  elseif(isset($_REQUEST["sucess"])){
    $sucess = "Bienvenido a nuestro sitio web.";
    echo "<h3 style='
    font-family:FangSong; 
    color:#0058ff;
    text-align:center;
    border:1px solid #0058ff;
    padding:10px;
    background-color:#e1f4ff;
    '>" . $sucess . "</h3>";

  }
  elseif(isset($_REQUEST["warning"])){
    $warning = "Error, vuelva a intentarlo e indique su edad correctamente.";
    echo "<h3 style='
    font-family:FangSong; 
    color:orange;
    text-align:center;
    border:1px solid orange;
    padding:10px;
    background-color:#ffffcc;
    '>" . $warning . "</h3>";

  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Redireccionamiento</h1>
      <h3>header().</h3>
      <br>
      <p>Mediante la funcion <b>Header()</b> podemos hacer un direccionamiento hacia la misma pagina y mostrar un mensaje si hay un error o si se valido correctamente</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>
      <br>

      <?php 
      validarEdad();
      ?>

      <form method="post" action="archivo-php.php">
        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

        Ingrese su edad: 
        <input type="text" name="edad" placeholder="Edad" maxlength="2">

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>
    </div>

  </body>
</html>