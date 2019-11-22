<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Condicionales if(), elseif() y else</h1>
      <h3>Condicionales en php</h3>
      <p></p>

      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <?php 
      $valorAleatorio = rand(1, 3);
      
      if($valorAleatorio == 1){
        echo "El valor fue el numero Uno." . "<br>";
        echo $valorAleatorio;
      }
      elseif($valorAleatorio == 2){
        echo "El valor fue el numero Dos." . "<br>";
        echo $valorAleatorio;
      }
      else{
        echo "El valor fue el numero Tres." . "<br>";
        echo $valorAleatorio;
      }
      ?>

    </div>

  </body>
</html>