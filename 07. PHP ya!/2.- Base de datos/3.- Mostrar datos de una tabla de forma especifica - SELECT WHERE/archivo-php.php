<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Mostrar datos en una tabla de forma especifica</h1>
      <h3>select usuarios from registros <b>where</b></h3>
      <br>
      <p>Propiedad where de MySQL</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">
        <div style="text-align:center; padding-bottom: 20px;">Ingrese algún dato para buscar un usuario.</div>

        <input type="text" name="correo" placeholder="Nombre, Correo Electronico o Codigo..." maxlength="50">   
        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

      <?php 
      buscarUsuario();
      ?>
    </div>

  </body>
</html>