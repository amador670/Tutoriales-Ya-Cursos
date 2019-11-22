<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Envio de datos a un formulario</h1>
      <h3>$_REQUEST[""]</h3>
      <br>

      <p>
        <?php 
        
        $nombre = $_REQUEST["nombre"];
        $edad = $_REQUEST["edad"];
        
        echo "Bienvenido " . $nombre . ", su edad es: " . $edad;
        echo "<br><br>";
        
        if($edad > 18){
          echo "Usted es mayor de edad";
        } 
        elseif($edad == 18){
          echo "Usted tiene 18 años de edad.";
        }
        else {
          echo "Usted no es mayor de edad";
        }
        
        ?>
      </p>

    </div>

  </body>
</html>