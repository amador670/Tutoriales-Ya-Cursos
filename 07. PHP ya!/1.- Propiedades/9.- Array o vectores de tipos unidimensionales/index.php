<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Array o vectores unidimensionales</h1>
      <p><b>count()</b>, Permite conocer el tamaño de un vector, es decir cuantos elementos contiene dicho vector.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <?php 

      $diasSemana = array(
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sabado",
        "Domingo"
      );

      echo "Los dias de la semana son: " . "<br>";
      for($i=0; $i<count($diasSemana); $i++){
        echo $i+1 . "-. " . $diasSemana[$i] . "<br>";
      }

      ?>
    </div>

  </body>
</html>