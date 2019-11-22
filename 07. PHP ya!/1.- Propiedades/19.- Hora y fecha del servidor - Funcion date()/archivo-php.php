<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Hora y fecha del servidor</h1>
      <h3>Funcion date()</h3>
      <br>
      <p>La funcion <b>date()</b> nos permite mostrar la hora y fecha del servidor.</p>
      <br>
      
      <p>Formatos para la fecha:</p>
      <pre>
      <b>d</b> día del mes con dos dígitos "01" al "31"
      <b>m</b> mes con dos dígitos "01" al "12"
      <b>Y</b> año con cuatro dígitos
      <b>j</b> día del mes "1" al "31"
      <b>n</b> mes "1" al "12"
      <b>y</b> año con dos dígitos
      </pre>
      
      <p>Los caracteres para la hora son:</p>
      <pre>
      <b>H</b> hora con dos dígitos "00" a "23"
      <b>i</b> minutos con dos dígitos "00" a "59"
      <b>s</b> segundos con dos dígitos "00" a "59"
      </pre>
      
      <p>Otras propiedades utiles son:</p>
      <pre>
      <b>L</b> "1" or "0", según si el año es bisiesto o no
      <b>w</b> día de la semana, en número, de "0" (domingo) a "6" (sábado)
      </pre>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <?php 
      horaFecha();
      ?>
    </div>

  </body>
</html>