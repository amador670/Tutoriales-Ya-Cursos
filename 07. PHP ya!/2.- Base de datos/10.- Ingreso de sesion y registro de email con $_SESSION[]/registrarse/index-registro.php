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
        <h3>Registro de usuario.</h3>
        <p>Complete el formulario correctamente para poder iniciar sesion.</p>
      </div>

      <form method="post" action="registro.php">

        Ingrese un nombre:
        <input type="text" name="usuario" placeholder="Nombre...." maxlength="50">    

        Ingrese un email: 
        <input type="email" name="correo" placeholder="Correo Electronico...." maxlength="50">

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

    </div>

  </body>
</html>