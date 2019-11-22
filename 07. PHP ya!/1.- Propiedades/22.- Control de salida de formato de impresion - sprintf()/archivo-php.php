<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Formato de salida de impresion</h1>
      <h3>sprinft()</h3>
      <br>
      <p>La funcion <b>prinft()</b> se encarga de los formatos de impresion, ahora veremos la funcion <b>sprinft()</b> que se encarga de los formato de impresion de salida, esta propiedad nos permite formatear la salida de un dato hacia un string y no a la pagina HTML.</p>
      <br>
      <p>Los mismos caracteres de conversion de la funcion prinft() son usados en <b>sprintf()</b>.</p>
      <br>
      <p><a href="http://www.tutorialesprogramacionya.com/phpya/temarios/descripcion.php?punto=46&cod=67&inicio=40">Tema sprinft()</a></p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr><br>

      <div style="color:<?php echo stringPrinft(39, 154, 0)?>">Este texto sera de color.</div>
    </div>

  </body>
</html>