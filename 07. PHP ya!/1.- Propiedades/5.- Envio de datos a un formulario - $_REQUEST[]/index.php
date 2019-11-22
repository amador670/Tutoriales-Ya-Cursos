<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="estilos.css">
 </head>
 <body>

  <div class="contenedor">
   <h1 style="color:orange;">Envio de datos a un formulario</h1>
   <h3>$_REQUEST[""]</h3>
   <br>
   <p>Esta propiedad nos permite recibir valores enviados mediante un formulario. esta variable se proporcionan al script a través de los mecanismos de entrada GET, POST, y COOKIE y por lo tanto pueden ser manipulados por el usuario remoto y no debe confiar en el contenido.</p>

   <p>Esta es una variable "super global" es decir que esta disponible en cualquier parte del script. No hace falta hacer <b>global $variable; para acceder a la misma desde funciones o metodos.</b></p>

   <br>
   <b><p style="color:orange">Ejemplo:</p></b>
   <hr>

   <form method="post" action="index.php">

    Ingrese su nombre:
    <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

    Ingrese su edad: 
    <input type="text" name="edad" placeholder="Edad" maxlength="2">

    <input type="submit" value="Enviar Datos" name="enviar">        
   </form>

   <?php 
   if($_POST){
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    if(!$nombre || !$edad){
     echo "Error. Ingrese los datos correctamente y vuelva a intentarlo";
    } 
    else {
     echo "Bienvenido " . $nombre . ", su edad es: " . $edad;
     echo "<br>";

     if($edad >= 18){
      echo "Usted es mayor de edad";       
     } else {
      echo "Usted no es mayor de edad";
     }
    }
   }
   ?>
  </div>

 </body>
</html>