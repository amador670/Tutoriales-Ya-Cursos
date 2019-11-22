<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Borrado de una cookie</h1>
    <h3></h3>
    <br>
    <p>Para borrar una cookie se debe llamar a la funcion <b>setcookie()</b> con una fecha anterior a la actual</p>
    <p>Una cookie que expiró no es enviada al navegador cuando el usuario visita dicha pagina.</p>

    <br>
    <b><p style="color:orange">Ejemplo: - Recordar email mediante cookie</p></b>
    <hr>

    <form method="post" action="archivo-php.php">

      Ingrese su correo:
      <input type="text" name="correoUsuario" placeholder="Correo email" maxlength="50" 
      value="<?php
      if(isset($_COOKIE["correo"])){
        echo $_COOKIE["correo"];
      }?>">    

      <input type="radio" name="opcion" value="recordar"> Recordar email
      <br>
      <input type="radio" name="opcion" value="noRecordar"> No recordar email

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>

  </div>

</body>
</html>

