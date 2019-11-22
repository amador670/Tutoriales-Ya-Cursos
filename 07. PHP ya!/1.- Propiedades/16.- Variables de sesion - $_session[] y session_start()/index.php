<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
  <style>
    body{
      text-align: justify;
    }
  </style>
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Variable de sesion</h1>
    <h3>$_session[] y session_start().</h3>
    <br>
    <p>Las variables de sesión se almacenan en el servidor y tienen un tiempo limitado de existencia a diferencias de las cookies. Como desventaja podemos decir que ocupa espacio en el servidor.</p>
    <br>
    <p>Para una variable de sesion, el servidor genera una clave única que es enviada al navegador y almacenada en una cookie. Luego, cada vez que el navegador solicita otra página al mismo sitio, envía esta cookie (clave única) con la cual el servidor identifica de qué navegador proviene la petición y puede rescatar de un archivo de texto las variables de sesión que se han creado. Cuando han pasado 20 minutos sin peticiones por parte de un cliente (navegador) las variables de sesión son eliminadas automáticamente (se puede configurar el entorno de PHP para variar este tiempo).</p>
    <br>
    <p>Una variable de sesión es más segura que una cookie ya que se almacena en el servidor. Otra ventaja es que no tiene que estar enviándose continuamente como sucede con las cookies. Otra ventaja de emplear una variable de sesión en lugar de una cookie es que cuando el navegador del cliente está configurado para desactivar las cookies las variables de sesión, tienen forma de funcionar (enviando la clave como parámetro en cada hipervínculo).</p>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr>

    <form method="post" action="archivo-php.php">

      Ingrese su nombre:
      <input type="text" name="usuario" placeholder="Nombre" maxlength="50">    

      Ingrese su clave: 
      <input type="password" name="clave" placeholder="Clave de Ingreso" maxlength="10">

      Correo email:
      <input type="email" name="correo" placeholder="Correo Electronico" maxlength="50" required>

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>

  </div>

</body>
</html>