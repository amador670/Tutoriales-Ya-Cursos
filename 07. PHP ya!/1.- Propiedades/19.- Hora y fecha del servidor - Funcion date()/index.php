<?php

require "archivo-php.php";

function horaFecha(){
  $hora = date("H:i:s");
  $fecha = date("d/m/Y");

  echo "La hora en el servidor es: " . $hora . "<br>";
  echo "La fecha del servidor es: " . $fecha . "<br>";

  //Dia de la semana
  $dia = date("w");

  echo "Hoy es el día "; 

  switch($dia) {
    case 0: echo "Domingo";
      break;
    case 1: echo "Lunes"; 
      break;
    case 2: echo "Martes";
      break;
    case 3: echo "Miercoles";
      break;
    case 4: echo "Jueves";
      break;
    case 5: echo "Viernes";
      break;
    case 6: echo "Sabado";
      break;
  }
}

?>