<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>

    <div class="contenedor">

      <div style="text-align:center;">
        <h1 style="color:orange;">Tecno Proyectos Design.</h1>
    
        <h3 style="text-align:center; margin-top:10px;">
          <?php registrarUsuarios() ?>
        </h3>
      </div>      

      <div class="fondo">
        <a href="index-registro.php" style="text-decoration-line: none;">
          <input type="submit" value="Registrarse" name="registrarse">
        </a>

        <a href="../iniciar-sesion/iniciar-sesion.php" style="text-decoration-line: none;">
          <input type="submit" value="Iniciar Sesión" name="iniciarSesion">
        </a>

        <br>        
      </div>         
    </div>

  </body>
</html>