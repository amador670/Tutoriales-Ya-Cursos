<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Inicio de sesion email a base de datos</h1>
    <h3>$_SESION</h3>
    <br>
    <p></p>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr>

    <form method="post" action="archivo-php.php">

      Ingrese su correo:
      <input type="mail" name="correo" placeholder="Correo electronico" maxlength="50">    

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>
  </div>

</body>
</html>