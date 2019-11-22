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
  <link rel="stylesheet" href="../css/estilos.css">
  <style>
   body{
    text-align: justify;
   }
  </style>
 </head>
 <body>

  <div class="contenedor">

   <div style="text-align:center;">
    <h1 style="color:orange;">Tecno Proyectos Design.</h1>

    <?php     
    if(isset($_SESSION["usuario"])){
     echo "<h3>" . "Bienvenido, " . $_SESSION["usuario"] . "</h3>";
     echo "<p>" . "Servicios disponibles. " . "</p>" . "<br>";   
    } elseif ($datos != $registros){
     session_destroy();
     echo "<h2>" . "Usuario no registrado en la base de datos. " . "</h2>" . "<br>"; 
    }
    ?>        
   </div>

   <?php if(!isset($_SESSION["usuario"])):?>     
   <div class="fondo">
    <a href="../registrarse/index-registro.php" style="text-decoration-line: none;">
     <input type="submit" value="Registrarse" name="registrarse">
    </a>

    <a href="../iniciar-sesion/iniciar-sesion.php" style="text-decoration-line: none;">
     <input type="submit" value="Iniciar sesión con otro correo" name="iniciarSesion">
    </a>
    <br>        
   </div>
   <?php endif;?>

   <!--   <div class="fondo">
<a href="../registrarse/index-registro.php" style="text-decoration-line: none;">
<input type="submit" value="Registrarse" name="registrarse">
</a>

<a href="iniciar-sesion.php" style="text-decoration-line: none;">
<input type="submit" value="Iniciar Sesión" name="iniciarSesion">
</a>

<br>        
</div> -->

  </div>

 </body>
</html>