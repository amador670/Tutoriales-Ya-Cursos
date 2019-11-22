<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;"></h1>
      <h3></h3>
      <br>
      <p></p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">

        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

        Ingrese su edad: 
        <input type="text" name="edad" placeholder="Edad" maxlength="2">

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

      <?php 

      ?>
    </div>

  </body>
</html>