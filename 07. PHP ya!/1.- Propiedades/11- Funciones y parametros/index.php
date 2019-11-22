<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Funciones con parametros()</h1>
      <p>Usar funciones con parametros es una forma muy eficaz de mantener nuestro codigo limpio y usarlo de forma mas eficaz.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="archivo-php.php">

        Ingrese su nombre:
        <input type="text" name="usuario" placeholder="Nombre" maxlength="50">    

        Ingrese su clave: 
        <input type="password" name="clave" placeholder="Clave" maxlength="10">
        
        Verifique su clave: 
        <input type="password" name="claveVerificacion" placeholder="Verificacion de Clave" maxlength="10">

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

      <?php 

      ?>
    </div>

  </body>
</html>