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
        $usuario = $_REQUEST["nombre"];

        if($_POST){
          echo $usuario . " felicidades, usted practica:" . "<br>";

          if(isset($_REQUEST["deporte1"])){
            echo $_REQUEST["deporte1"] . "<br>";
          }
          if(isset($_REQUEST["deporte2"])){
            echo $_REQUEST["deporte2"] . "<br>";
          }
          if(isset($_REQUEST["deporte3"])){
            echo $_REQUEST["deporte3"] . "<br>";
          }
          if(isset($_REQUEST["deporte4"])){
            echo $_REQUEST["deporte4"] . "<br>";
          }
          if(isset($_REQUEST["deporte5"])){
            echo $_REQUEST["deporte5"] . "<br>";
          }
          if(isset($_REQUEST["deporte6"])){
            echo $_REQUEST["deporte6"] . "<br>";
          }
          if(isset($_REQUEST["deporte7"])){
            echo $_REQUEST["deporte7"] . "<br>";
          }
        }



        ?>
      </p>

    </div>

  </body>
</html>