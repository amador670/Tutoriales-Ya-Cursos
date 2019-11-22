<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Limite de registros en php</h1>
    <h3>Propiedad LIMIT</h3>
    <br>
    <p>Mediante esta propiedad podemos regular la cantidad de valores o resultados queremos mostrar.</p>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr>

    <form method="post" action="index.php">
      <div style="text-align: center; padding-bottom: 20px;">        
        Numero de usuarios que desea consultar.
        Ingrese un valor.
      </div>

      <input type="text" name="limiteUsuarios" placeholder="Ejemplo. 1, 3 (Quiero mostrar desde el 1, 3 resultados)" maxlength="7">
      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>

    <?php 
    usuarios();
    ?>
  </div>

</body>
</html>