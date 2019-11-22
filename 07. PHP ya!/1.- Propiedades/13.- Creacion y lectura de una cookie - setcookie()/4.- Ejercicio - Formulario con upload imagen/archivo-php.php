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
          }?>;

        color: 
          <?php 
          if(isset($_COOKIE["letras-de-fondo"])){
            $letrasFondo = $_COOKIE["letras-de-fondo"];
            echo $letrasFondo;
          }?>
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

      <form method="post" action="index.php" enctype="multipart/form-data">
        Seleccione un archivo:
        <input type="file" name="subirArchivo">
        
        Seleccione una imagen:
        <div style="font-size: 18px;"><input type="radio" value="negro" name="radio">Letras negras</div>
        <div style="font-size: 18px;"><input type="radio" value="blanco" name="radio">Letras blancas</div>

        <input type="submit" value="Enviar Archivo" name="enviar">        
      </form>

    </div>

  </body>
</html>