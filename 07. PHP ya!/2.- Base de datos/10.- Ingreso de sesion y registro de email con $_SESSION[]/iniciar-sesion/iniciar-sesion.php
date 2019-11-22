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
    <h3>Inicio de sesión mediante correo.</h3>
    <p>Inicie sesión para continuar y poder disfrutar de todos los servicios.</p>
   </div>

   <form method="post" action="archivo-php-iniciar-sesion.php">

    Ingrese su correo:
    <input type="mail" name="correo" placeholder="Correo electronico" maxlength="50">    

    <input type="submit" value="Enviar Datos" name="enviar">        
   </form>
  </div>

 </body>
</html>