<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;"></h1>
      <h3></h3>
      <br>

      <p>
        <?php 
        $valor1 = $_REQUEST["valor1"];
        $valor2 = $_REQUEST["valor2"];
        $operacionMatematica = $_REQUEST["operacionMatematica"];

        if($operacionMatematica == "sumar"){
          $suma = $valor1 + $valor2;
          echo "La suma de ambos valores es: " . $suma; 
        } else{
          if($operacionMatematica == "restar"){
            $restar = $valor1 - $valor2;
            echo "La resta de ambos valores es: " . $restar;
          }
        }
        ?>
      </p>

    </div>

  </body>
</html>