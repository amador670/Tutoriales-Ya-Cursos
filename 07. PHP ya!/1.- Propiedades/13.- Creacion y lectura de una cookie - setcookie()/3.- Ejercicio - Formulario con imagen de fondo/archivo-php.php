<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Archivos/estilos.css">
    <style>
      form{
        background-image: 
          <?php 
          if(isset($_COOKIE["imagen-de-fondo"])){
            $imagenFondo = $_COOKIE["imagen-de-fondo"];
            echo $imagenFondo; 
          } else{
            $imagenFondo = "url(img.jpg)";
          }
          ?>;
        color: 
          <?php 
          if(isset($_COOKIE["letras-de-fondo"])){
            $letrasFondo = $_COOKIE["letras-de-fondo"];
            echo $letrasFondo;
          } else {
            $letrasFondo = "#FFFFFF";
          }
          ?>;
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
        <div style="font-size: 18px;"><input type="radio" value="img1" name="radio">Imagen 1.</div>
        <div style="font-size: 18px;"><input type="radio" value="img2" name="radio">Imagen 2.</div>
        <div style="font-size: 18px;"><input type="radio" value="img3" name="radio">Imagen 3.</div>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

      <?php 

      ?>
    </div>

  </body>
</html>