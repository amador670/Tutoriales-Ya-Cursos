<?php

//añadimos en vararibles el ancho y alto de la imagen
$ancho = 300;
$alto = 300;
//Creamos la imagen una imagen.

$imagen = imagecreatefromjpeg("fondo.jpg") or die("Problemas al cargar la imagen.");
//Añadimos el color de fondo
$fondo = imagecolorallocate($imagen, 230, 230, 230);
//Añadimos el color del borde
$borde_linea = imagecolorallocate($imagen, 0, 0, 255);
//Añadimos el color al texto
$color_texto = imagecolorallocate($imagen, 0, 0, 255);

//Añadimos el texto de la imagen. 
//1.- El primer digito es el tamaño del texto, maximo 5
//2.- El segundo digito es la orientacion de derecha a izquierda
//3.- El tercer digito es la orientacion de arriba hacia abajo
imagestring($imagen, 5, 100, 150, "Hello World!!", $color_texto);

//Añadimos el color del borde
imagerectangle($imagen, 10, 10, 290, 290, $borde_linea);

//Mostramos la imagen
header("Content-type: image/jpeg");

//
imagejpeg($imagen);
imagedestroy($imagen);
?>