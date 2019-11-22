<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Ciclo for(), while() y do while()</h1>
      <h3>Ciclos en php</h3>
      <p></p>

      <b><p style="color:orange">Ejemplos de los diferentes ciclos:</p></b>
      <hr>

      <?php 

      $valorMultiplicar = "1";
      echo "Tabla de multiplicar del Dos:" . "<br>";

      for($i=2; $i<=20; $i=$i+2){
        echo "2 x " . $valorMultiplicar . " = ";
        $valorMultiplicar ++;
        echo $i . "<br>";        
      }

      ?>

      <hr>

      <?php
      $valorMultiplicar = "1";
      $valor="2";  

      echo "Tabla de multiplicar del Dos:" . "<br>";

      while($valor<=20){
        echo "2 x " . $valorMultiplicar . " = ";
        $valorMultiplicar ++;
        echo $valor . "<br>";
        $valor = $valor + 2;
      }
      ?>

      <hr>

      <?php  
      $digito = "20";
      $valorMultiplicar = "1";
      
      echo "Tabla de multiplicar del Veinte:" . "<br>";

      do{
        echo "20 x " . $valorMultiplicar . " = ";
        $valorMultiplicar ++;
        echo $digito . "<br>";
        $digito = $digito+20;
      } while($digito <= 200);
      ?>


    </div>

  </body>
</html>