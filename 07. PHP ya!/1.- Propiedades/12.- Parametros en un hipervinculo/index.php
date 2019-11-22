<?php

require "archivo-php.php";

//Si existe un metodo $_REQUEST se aplica este condicional
if($_REQUEST){
  
  //Usamos un echo donde imprime la tabla de multiplicar usando la propiedad $_REQUEST[tabla], de esta forma se imprime el valor de dicha tabla
  echo "La tabla de multiplicar del " . $_REQUEST["tabla"] . " es:" . "<br>";

  //Creamos un ciclo for para mostrar los valores
  for($i=1; $i<=10; $i++){
    
    //Creamos una variable "$valor" donde el ciclo que es igual a 1 y menor a 10 se multiplicara  por el valor de la tabla clickeado
    $resultado = $i * $_REQUEST["tabla"];

    //Luego mostramos el resultado, en este caso lo hice de la siguiente forma:
    //Mostramos el metodo $_REQUEST con el valor clickeado para que se vea mejor + el ciclo (del 1 al 10) y por ultimo el valor resultado
    echo $_REQUEST["tabla"] . " x $i = " . $resultado . "<br>";
  }
}

?>