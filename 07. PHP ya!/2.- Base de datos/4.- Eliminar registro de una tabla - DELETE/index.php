<?php

require "archivo-php.php";

function eliminarUsuario(){

	if($_POST){
		$conexion = mysqli_connect("localhost", "root", "", "curso_php_ya");

		$registro = mysqli_query($conexion, "SELECT codigo, nombre, mail, curso FROM alumnos WHERE codigo='$_REQUEST[datoUsuario]' or nombre='$_REQUEST[datoUsuario]' or mail='$_REQUEST[datoUsuario]'");

		if($eliminarUsuario = mysqli_fetch_array($registro)){
			mysqli_query($conexion, "DELETE FROM alumnos WHERE codigo='$_REQUEST[datoUsuario]' or nombre='$_REQUEST[datoUsuario]' or mail='$_REQUEST[datoUsuario]'") or die("Problemas al borrar usuario".mysqli_error($conexion));
   
			echo "<h3>" . "Se elimino el usuario correctamente" . "</h3>";
			echo "El usuario que elimino fue:" . "<br>";
			echo "Codigo de usuario: " . $eliminarUsuario["codigo"] . "<br>";
			echo "Nombre: " . $eliminarUsuario["nombre"] . "<br>";
			echo "Correo: " . $eliminarUsuario["mail"] . "<br>";
			echo "Curso seleccionado: " . $eliminarUsuario["curso"];     
		}
		else{ 
			echo "<h3>" . "No existe el usuario ingresado" . "</h3>";
			echo "Usted ingreso: " . $_REQUEST["datoUsuario"];
		}
	}
}

?>