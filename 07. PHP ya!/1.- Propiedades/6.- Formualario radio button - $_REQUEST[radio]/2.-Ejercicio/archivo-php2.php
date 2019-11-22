<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;"></h1>
      <h3></h3>
      <br>

      <p>
        <?php 
        $usuario = $_REQUEST["nombre"];
        $estudios = $_REQUEST["estudios"];
        $informatica = "Ingeniería Informatica";
        $mecanica = "Mecanica y automotriz";
        $electronica = "Electronica y robotica";

        if($estudios==$informatica){
          echo $usuario . ", usted posee estudios en " . $informatica;
        } elseif($estudios==$mecanica){
          echo $usuario . ", usted posee estudios en " . $mecanica;
        } else{
          echo $usuario . ", usted posee estudios en " . $electronica;
        }
        ?>
      </p>

    </div>

  </body>
</html>