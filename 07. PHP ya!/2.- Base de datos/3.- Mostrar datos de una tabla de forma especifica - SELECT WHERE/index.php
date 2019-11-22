<?php

require "archivo-php.php";

function buscarUsuario(){
  if($_POST){

    $conexion = mysqli_connect("localhost", "root", "", "curso_php_ya") or die("Error al conectar con la base de datos");

    $registro = mysqli_query($conexion, "select codigo, nombre, mail, curso from alumnos where mail='$_REQUEST[correo]' or nombre='$_REQUEST[correo]' or codigo='$_REQUEST[correo]'") or die("Error al buscar usuario en la base de datos" .mysqli_error($registro));

    if($DatosUsuario = mysqli_fetch_array($registro)){
      echo "<h3>" . "Usuario encontrado." . "</h3>";
      echo "Codigo de usuario: " . $DatosUsuario["codigo"] . "<br>";
      echo "Nombre: " . $DatosUsuario["nombre"] . "<br>";
      echo "Correo: " . $DatosUsuario["mail"] . "<br>";
      echo "Curso seleccionado: ";
      switch ($DatosUsuario["curso"]) {
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
    else{
      echo "<h3>No existe usuario con el correo electronico ingresado.</h3>";
      echo $_REQUEST["correo"];
    }  
    mysqli_close($conexion);
  }
}
?>