<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="estilos.css">
 </head>
 <body>

  <div class="contenedor">

   <h1 style="color:orange;">Funcion date()</h1>
   <h3>date("d/m/Y")</h3>
   <p>La funcion date() nos permite utilizar la fecha, mes y año del navegador web, de esta forma podemos crear propiedades, condicionales, practicas o ejemplos usando la fecha del navegador.</p>

   <b><p style="color:orange">Ejemplo:</p></b>
   <hr>

   <?php 

   date_default_timezone_set('Australia/Melbourne');
   $dia = date("d");
   $mes = date("m");
   $ano = date("Y");

   echo "Hoy es " . $dia . "/" . $mes . "/" . $ano . "<br><br>";

   if($dia <= 15){
    echo "El mes aun esta en la primera quincena.";
   } else{
    echo "Este ejemplo fue elaborado el dia 2 de Mayo del año 2017";
   }

   ?>
  </div>

 </body>
</html>