<?php

require "archivo-php.php";

function enviarDatos(){
	if ($_POST){
		//La funcion "copy" permite copiar el texto de nuestra pagina, en este caso copiar la imagen cargada.
		copy($_FILES["subirArchivo"]["tmp_name"], $_FILES["subirArchivo"]["name"]);

		echo "<h3>" . "La imagen se registro correctamente en el servidor." . "</h3>" . "<br>";

		$nombre = $_FILES["subirArchivo"]["name"];
		echo "<img src=\"$nombre\">";
	}
}
?>