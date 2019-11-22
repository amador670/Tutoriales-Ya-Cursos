<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Redirecciones a otras paginas</h1>
      <h3>Header en php</h3>
      <br>
      <p>Mediante la funcion header() podemos direccionar al usuario a otra pagina o seccion de nuestro sitio web.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <p>En este ejemplo implementamos un formulario que solicita el ingreso de algun sitio web mediante un enlace, luego del ingreso el usuario sera dirigido a dicha pagina mediante la funcion <b>header()</b>.</p>
      <hr>

      <form method="get" action="archivo-php.php">

        Ingrese un sitio web:
        <input type="text" name="direccion" placeholder="Ingrese un enlace." maxlength="50">
            
        <input type="submit" value="Buscar sitio" name="enviar">        
      </form>
    </div>

  </body>
</html>