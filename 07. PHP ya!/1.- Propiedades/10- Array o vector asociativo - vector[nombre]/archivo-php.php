<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Array o vector asociativo</h1>
      <h3>Claves de usuarios registrados:</h3>
      <br>

      <p>
        <?php 
        $agrupacionUsuarios = $_REQUEST["agrupacionUsuarios"];

        $usuarioAmador = array(
          "Dirección" => "Madrid - España",
          "Clave" => "123amador",
          "Telefono" => "0424-9132924"
        );

        $usuarioMaximo = array(
          "Dirección" => "Fundacion - Colombia",
          "Clave" => "maximo18",
          "Telefono" => "0426-6910297"
        );

        $usuarioMagdalena = array(
          "Dirección" => "Pinillo - Colombia",
          "Clave" => "magdalenaColombiana",
          "Telefono" => "0414-8596784"
        );

        $usuarioKaren = array(
          "Dirección" => "Bolivar - Venezuela",
          "Clave" => "amojustinbiber",
          "Telefono" => "0416-1860081"
        );

        $usuarioSarah = array(
          "Dirección" => "Bolivar - Venezuela",
          "Clave" => "123amador",
          "Telefono" => "0416-1860210"
        );

        function usuarios($e){
          echo "<pre>";
          print_r($e);
          echo "</pre>";
        }

        if($agrupacionUsuarios == "itens1"){
          usuarios($usuarioAmador);
        } 
        elseif($agrupacionUsuarios == "itens2"){
          usuarios($usuarioMaximo);
        } 
        elseif($agrupacionUsuarios == "itens3"){
          usuarios($usuarioMagdalena);
        } 
        elseif($agrupacionUsuarios == "itens4"){
          usuarios($usuarioKaren);
        } else {
          if($agrupacionUsuarios == "itens5"){
            usuarios($usuarioSarah);
          }
        }
        ?>
      </p>

    </div>

  </body>
</html>