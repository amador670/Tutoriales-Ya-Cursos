<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <b><p style="color:orange">Ejemplo II:</p></b>
      <p style="color:blue">Indicar si un usuario tiene estudios.</p>

      <form method="post" action="archivo-php2.php">

        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre...">    

        ¿Usted posee estudios en?:
        <br><br>

        <input type="radio" value="Ingeniería Informatica" name="estudios">
        1.- Ingeniería Informatica <br>        
        <input type="radio" value="Mecanica y automotriz" name="estudios">
        2.- Mecanica y automotriz <br>        
        <input type="radio" value="Electronica y robotica" name="estudios">
        3.- Electronica y robotica

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>
    </div>

  </body>
</html>