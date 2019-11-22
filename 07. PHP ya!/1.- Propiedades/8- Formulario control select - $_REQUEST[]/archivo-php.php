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
        $agrupacionItens = $_REQUEST["agrupacionItens"];

        if($agrupacionItens == "itens1"){
          echo $usuario . ", bienvenido al curso de PHP y MySQL";
        } elseif($agrupacionItens == "itens2"){
          echo $usuario . ", bienvenido al curso de JavaScript y Jquey";
        } elseif($agrupacionItens == "itens3"){
          echo $usuario . ", bienvenido al curso de HTML y desarrollo web";
        } else {
          if($agrupacionItensitens == "itens4"){
            echo $usuario . ", bienvenido al curso de CSS y SASS estilos web";
          }
        }


        ?>
      </p>

    </div>

  </body>
</html>