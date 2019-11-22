<?php

require "archivo-php.php";

function usuarios(){
	if($_POST){
		$limiteUsuarios = $_REQUEST["limiteUsuarios"];
		$conexion = mysqli_connect("localhost", "root", "", "curso_php_ya") or die("Error al cargar la base de datos");

		$registros = mysqli_query($conexion, "SELECT * FROM alumnos LIMIT $limiteUsuarios") or die("Problemas en cargar los resultados de la base de datos");

		while($datos = mysqli_fetch_array($registros)){
			echo "Codigo de usuario: " . $datos["codigo"] . "<br>";
			echo "Nombre: " . $datos["nombre"] . "<br>";
			echo "Correo: " . $datos["mail"] . "<br>";
			echo "Curso seleccionado: ";
			
			switch ($datos["curso"]) {
				case 1:
				echo "Php y MySQL";
				break;

				case 2: 
				echo "JavaScript y jQuery";
				break;

				case 3: 
				echo "Visual Basic .NET";
				break;

				default:
				echo "Error, lenguaje no registrado en la base de datos.";
				break;
			} 
			echo "<br><br>";
		}
		mysqli_close($conexion);
	}
}
?>