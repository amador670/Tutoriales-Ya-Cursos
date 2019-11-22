<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Subir archivos al servidor</h1>
      <h3>UPLOAD and $_FILES[]</h3>
      <br>
      <p><b>Ojo.</b> Por defecto PHP está configurado para poder cargar archivos de hasta 2 Mb, de todos modos, a este valor lo podemos modificar.</p>

      <p><b>enctype="multipart/form-data</b>, con esta propiedad indicamos que dentro del formulario de carga se envían archivos. Hay que tener mucho cuidado cuando tipeamos esta propiedad, si nos equivocamos en algún caracter el proceso de upload no funcionará.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php" enctype="multipart/form-data">
        Seleccione un archivo:
        <input type="file" name="subirArchivo">

        <input type="submit" value="Enviar Archivo" name="enviar">        
      </form>

      <?php 
        enviarDatos();
      ?>
    </div>

  </body>
</html>