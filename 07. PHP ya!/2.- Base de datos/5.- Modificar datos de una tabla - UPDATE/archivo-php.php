<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Actualizar datos en una tabla</h1>
      <h3>UPDATE</h3>
      <br>
      <p>La propiedad MySQL update nos permite actulizar datos en una tabla</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">

        Ingrese el correo a modificar:
        <input type="email" name="correoAntiguo" placeholder="Correo Antiguo" maxlength="50">    

        Ingrese el nuevo correo: 
        <input type="email" name="correoNuevo" placeholder="Correo Nuevo" maxlength="50">

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

      <?php 
      modificarUsuario();
      ?>
    </div>

  </body>
</html>