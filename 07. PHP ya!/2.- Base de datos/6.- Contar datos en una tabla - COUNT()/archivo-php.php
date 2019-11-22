<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Contar datos en una tabla</h1>
      <h3>Count()</h3>
      <br>
      <p>Con la propiedad <b>count()</b> podemos contar los valores un una tabla</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">
        <div style="text-align:center; padding-bottom: 15px;">Contar usuarios de la base de datos:</div>
        <input type="submit" value="Contar usuarios" name="enviar">        
      </form>

      <?php 
      verUsuarios();
      ?>
    </div>

  </body>
</html>