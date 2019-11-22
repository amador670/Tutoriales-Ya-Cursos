<?php

require "archivo-php.php";

function verUsuarios(){
	if($_POST){
		$conexion = mysqli_connect("localhost", "root", "", "curso_php_ya");

		$registro = mysqli_query($conexion, "SELECT count(*) AS cantidad FROM alumnos") or die("Error con la base de datos. Intente de nuevo".mysqli_error($conexion));

		$datosUsuario = mysqli_fetch_array($registro);
		echo "<h3>" . "Los usuarios de la base de datos son " .
		"<span style='color:orange'>" . $datosUsuario["cantidad"] . "</span>" . "</h3>";
	}
}

?>