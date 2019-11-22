<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Archivos/estilos.css">
    <style>
      form{
        background: 
          <?php 
          if(isset($_COOKIE["background"])){
            $colorFondo = htmlspecialchars($_COOKIE["background"]);
            echo $colorFondo;
          }?>;
      }
    </style>
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Cookie creada correctamente</h1>
      <h3>setcookie()</h3>
      <br>

      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">

        Seleccione una imagen:
        <div style="font-size: 18px;"><input type="radio" value="rojo" name="radio">Rojo.</div>
        <div style="font-size: 18px;"><input type="radio" value="verde" name="radio">Verde.</div>
        <div style="font-size: 18px;"><input type="radio" value="azul" name="radio">Azul.</div>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>
    </div>

  </body>
</html>