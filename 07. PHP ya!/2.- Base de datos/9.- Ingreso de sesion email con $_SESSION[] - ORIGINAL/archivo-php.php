<?php
session_start();
if($_POST){
  $conexion = mysqli_connect("localhost", "root", "", "curso_php_ya");

  $registros = mysqli_query($conexion, "SELECT nombre, mail FROM alumnos WHERE mail='$_REQUEST[correo]'") or die("Error al conectar con la base de datos" .mysqli_error($conexion));

  if($datos = mysqli_fetch_array($registros)){
    $_SESSION["usuario"] = $datos["nombre"];
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
    <style>
      body{
        text-align: justify;
      }
    </style>
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Sesion de ingreso mediante email</h1>
      <h3>$_session[] y session_start() a base de datos.</h3>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <h3 style="font-family: Calibri">
        <?php     
        if(isset($_SESSION["usuario"])){
          echo "Inicio sesión correctamente " . $_SESSION["usuario"];   
        } else{
          echo "Usuario no registrado en la base de datos";           
        }
        ?>      
      </h3>

    </div>

  </body>
</html>