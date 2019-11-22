<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Archivos/estilos.css">
    <style>
      body{
        background-color: 
          <?php 
          if(isset($_COOKIE["background-color"])){
            $colorFondo = htmlspecialchars($_COOKIE["background-color"]);
            echo $colorFondo;
          } 
          ?>;
      }
    </style>
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Creacion y lectura de una Cookie</h1>
      <h3>setcookie()</h3>
      <p>Una cookie consta de un nombre, un valor, una fecha de expiración y un servidor. Una cookie está limitada a 4KB.</p>
      <br>
      <p>Luego que una cookie es creada sólo el sitio que la creó puede leerla. Luego de creada una cookie, cada vez que el navegador del usuario visita el sitio, se envía dicha cookie. Otra cosa importante que hay que tener en cuenta es que el usuario del browser puede configurar el mismo para no permitir la creación de cookies, lo que significa que el uso de cookies debe hacerse con moderación y cuando la situación lo requiera. La mayoria de los navegadores están configurados para permitir la creación de cookies.</p>
      <br>
      <p>Para la creación de una cookie desde PHP debemos llamar a la función setcookie.</p>
      <br>
      <p> setcookie(&lt;nombre de la cookie&gt;, &lt;valor de la cookie&gt;, &lt;fecha de expiración&gt;, &lt;carpeta del servidor&gt;) </p>

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