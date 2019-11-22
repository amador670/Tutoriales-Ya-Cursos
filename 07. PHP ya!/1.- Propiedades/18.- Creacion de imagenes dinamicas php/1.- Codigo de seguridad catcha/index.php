<?php
function codigoSeguridad(){
  if(isset($_REQUEST["sucess"])){
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
  elseif(isset($_REQUEST["error"])){
    $error = "Codigo de verificacion incorrecto.";   
    echo "<h3 style='
    font-family:FangSong; 
    color:#ff2f2f;
    text-align:center;
    border:1px solid red;
    padding:10px;
    background-color:#ffe8e8;
    '>" . $error . "</h3>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Archivos/estilos.css">

    <style>
      #imagenSeguridad{
        float: right; 
        padding-right: 50px; 
        padding-top: 2px;
      }
    </style>

  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Crear imagenes dinamicas con php</h1>
      <h3></h3>
      <br>
      <p>PHP permitir crear sitios web de forma dinamica, ademas permtie crear imagenes de forma dinamica de esta forma podemos crear imagenes para codigos de seguridad en un formulario y/o cualquier otra tarea.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>
      <br>

      <?php
      codigoSeguridad();
      ?>

      <form method="post" action="archivo-php.php">

        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

        Ingrese su edad: 
        <input type="text" name="edad" placeholder="Edad" maxlength="2">

        Ingrese codigo de seguridad:
        <div id="imagenSeguridad"><img src="imagen-seguridad.php" alt="Imagen de seguridad"></div>

        <input type="text" name="codigoSeguridad" placeholder="Codigo de seguridad" maxlength="6">

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>
    </div>

  </body>
</html>