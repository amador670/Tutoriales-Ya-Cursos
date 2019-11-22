<?php

require "archivo-php.php";

function propiedadPrintf(){
  $valorEntero = 255;
  $valorDecimales = 10.77;
  $hexadecimal1 = "255";
  $hexadecimal2 = "144";
  $hexadecimal3 = "65";

  //Valor entero se usa %d
  printf("- Valor entero en formato decimal %d", $valorEntero);
  echo "<br>";
  
  //Valor doble o con dicimales %f
  printf("- Valor doble o con dicimales %f", $valorDecimales);
  echo "<br>";
  
  //Valor doble o con decimales indicando la cantidad %numerof
  printf("- Valor doble o con decimales indicando la cantidad %0.2f", $valorDecimales);
  echo "<br>";
  
  //Valor en formato hexadecimal miniscula %x
  printf("- Valor entero en formato hexadecimal con letras minisculas %x%x%x", $hexadecimal1, $hexadecimal2, $hexadecimal3);
  echo "<br>";
  
  //Valor en formato hexadecimal mayuscula %X
  printf("- Valor entero en formato hexadecimal con letras mayusculas %X%X%X", $hexadecimal1, $hexadecimal2, $hexadecimal3);
  echo "<br>";
  
  //Valor en formato binacio %b
  printf("- Valor en formato binario %b", $valorEntero);
  echo "<br>";
  
  //Valor octal %o
  printf("- Valor en formato octal %o", $valorEntero);
  echo "<br>";
  
  //Valor como caracter ASCII %c
  printf("- Valor como caracter ASCII %c", $valorEntero);
  echo "<br>";

  //Imprimir valor % con printf()
  printf("- Ingrimir valor %%, $valorEntero");
}

?>