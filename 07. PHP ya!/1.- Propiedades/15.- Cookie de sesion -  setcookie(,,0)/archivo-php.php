<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Cookie de sesión</h1>
    <h3></h3>
    <br>
    <p>Para crear una cookie que exista mientras no se cierre la pagina del navegador debemos establecer una fecha con valor cero (0), una vez que es cerrado el navegador dicha cookie desaparecerá, ejemplo de la sintaxis es: </p>
    <br>
    <p><b>setcookie(</b> "nombre de la cookie", "valor de la cookie", <b>fecha de la cookie con valor 0)</b>.</p>

    <br>
    <p style="color:orange"><b>Ejemplo:</b></p>
    <hr><br>

    <h1 style="color:orange; text-align:center; font-family:Calibri;">
      <?php bienvenida(); ?>    
    </h1>

    <form method="post" action="index.php">

      Ingrese su nombre:
      <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>

  </div>

</body>
</html>