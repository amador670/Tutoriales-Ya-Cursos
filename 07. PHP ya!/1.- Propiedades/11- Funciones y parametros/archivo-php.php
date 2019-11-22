<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Funciones con parametros</h1>
      <h3>Verificacion de clave mediante funciones y parametros.</h3>
      <br>

      <?php 
      $clave = $_REQUEST["clave"];
      $claveVerificacion = $_REQUEST["claveVerificacion"];

      function verificacionClave($clave1, $clave2){
        if($clave1 == $clave2){
          echo "Exito, la verificacion de claves fue correcta";
        } else{
          if($clave1 != $clave2){  
            echo "Las claves no fueron iguales, verificacion fallida";
          }
        }
      }
      verificacionClave($clave, $claveVerificacion);
      ?>

    </div>

  </body>
</html>