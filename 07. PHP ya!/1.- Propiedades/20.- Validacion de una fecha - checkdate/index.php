<?php
function verificacionFormulario(){
  if(isset($_REQUEST["error_nombre"])){
    $error_nombre = "Ingrese un nombre.";   
    echo "<h3 style='
    font-family:FangSong; 
    color:#ff2f2f;
    text-align:center;
    border:1px solid red;
    padding:10px;
    background-color:#ffe8e8;
    '>" . $error_nombre . "</h3>";
  }
  if(isset($_REQUEST["error_date"])){
    $error_date = "Ingrese una fecha.";   
    echo "<h3 style='
    font-family:FangSong; 
    color:#ff2f2f;
    text-align:center;
    border:1px solid red;
    padding:10px;
    background-color:#ffe8e8;
    '>" . $error_date . "</h3>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;font-family:'Agency FB';">Validacion de una fecha.</h1>
      <h3>Checkdate()</h3>
      <br>
      <p>Mediante esta propiedad podemos verificar si se añadio una fecha correctamente</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>
      <br>

      <?php 
      verificacionFormulario();
      ?>

      <form method="post" action="archivo-php.php">

        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre" >   

        Ingrese una fecha (dd/mm/aaaa): 
        <div style="display:block;">
          <input style="width:10%; display:inline;" type="text" name="dia" placeholder="Dia" >

          <input style="width:10%; display:inline;" type="text" name="mes" placeholder="Mes" >

          <input style="width:12%; display:inline;" type="text" name="year" placeholder="Año" >
        </div>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

    </div>

  </body>
</html>