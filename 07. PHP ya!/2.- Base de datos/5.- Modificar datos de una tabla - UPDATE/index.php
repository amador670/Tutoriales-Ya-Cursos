<?php

require "archivo-php.php";

function modificarUsuario(){
	if($_POST){
		$conexion = mysqli_connect("localhost", "root", "", "curso_php_ya");

		$registro = mysqli_query($conexion, "SELECT codigo, nombre, mail, curso FROM alumnos WHERE mail='$_REQUEST[correoAntiguo]'") or die("Error al conectar con la base de datos");

		if($modificarCorreo = mysqli_fetch_array($registro)){			
			mysqli_query($conexion, "UPDATE alumnos SET mail='$_REQUEST[correoNuevo]' WHERE mail='$_REQUEST[correoAntiguo]'") or die("Error al actualizar el correo".mysqli_error($conexion));

			echo "<h3>" . "Se actualizo el usuario exitosamente" . "</h3>" . "<br>";
			echo "El usuario que modificado es:" . "<br>";
			echo "Codigo de usuario: " . $modificarCorreo["codigo"] . "<br>";
			echo "Nombre: " . $modificarCorreo["nombre"] . "<br>";
			echo "Correo: " . $modificarCorreo["mail"] . "<br>";
			echo "Curso seleccionado: ";			
			switch ($modificarCorreo["curso"]) {
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

			echo "<br><br>" . "El correo nuevo es: " . $_REQUEST["correoNuevo"];			
		} 
		else{
			echo "<h3>" . "El correo ingresado no existe en la base de datos." . "</h3>";
		}
	}
}
?>