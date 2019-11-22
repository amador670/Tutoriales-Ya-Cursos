<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Eliminar registro de una tabla</h1>
    <h3>Delete from usuario where alumnos</h3>
    <br>
    <p>De esta forma podemos eliminar un usuario de nuestra base de datos</p>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr>

    <form method="post" action="index.php">
       <div style="text-align:center; padding-bottom: 20px;">Eliminar un usuario en una tabla.</div>

       <input type="text" name="datoUsuario" placeholder="Nombre, Correo Electronico o Codigo..." maxlength="50">   
       <input type="submit" value="Enviar Datos" name="enviar">        
    </form>

    <?php 
    eliminarUsuario();
    ?>
 </div>

</body>
</html>