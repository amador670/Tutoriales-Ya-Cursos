<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Insertar datos en una tabla</h1>
      <h3>Insert - MySQL</h3>
      <br>
      <p>Las propiedades <b>mysqli_#()</b>, Representa una conexión entre PHP y una base de datos MySQL. </p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">

        Ingrese su nombre:
        <input type="text" name="usuario" placeholder="Nombre" maxlength="50">    

        Ingrese su email: 
        <input type="email" name="correo" placeholder="Correo Electronico" maxlength="50">

        Seleccione un curso para aprender:
        <select name="curso" id="">
          <option value="1">Php y MySQL</option>
          <option value="2">JavaScript y jQuery</option>
          <option value="3">Visual Basic .NET</option>
        </select>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

      <div style="text-align:center;">
        <?php registrarUsuarios() ?>
      </div>
      
    </div>

  </body>
</html>