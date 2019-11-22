<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Mostrar o recuperar datos de una tabla</h1>
      <h3>Ej: select usuarios from registro</h3>
      <br>
      <p>Con la propiedad "<b>select</b> datos de la tabla <b>form</b> nombre de la tabla de la base de datos"; Podemos recuperar todos los datos de la base de datos.</p>
      
      <p>La propiedad <b>mysqli_fetch_array(result)</b> retorna una fila de resultado como un array asociativo, numérico, o ambos.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="index.php">

        <div style="text-align:center; padding-bottom: 20px;">Usuarios registrados en la base de datos:</div>
        <input type="submit" value="Ver Base de Datos" name="enviar">        
      </form>

      <?php 
      mostrarUsuarios() 
      ?>    

    </div>

  </body>
</html>