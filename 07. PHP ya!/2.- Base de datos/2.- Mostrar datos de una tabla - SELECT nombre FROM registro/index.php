<?php 

require 'archivo-html.php';

function mostrarUsuarios(){
  if($_POST){

    $conexion = mysqli_connect("localhost", "root", "", "curso_php_ya") or die("Error al conectarse a la base de datos");

    $registros = mysqli_query($conexion, "select codigo, nombre, mail, curso from alumnos") or die("Error al conectarse con los datos ".mysqli_error($conexion));

    echo "<h3>" . "Lista de usuarios registrados en la base de datos" . "</h3>" . "<br>";

    while ($datosRegistros=mysqli_fetch_array($registros)) {

      echo "Codigo de usuario: " . $datosRegistros["codigo"] . "<br>";
      echo "Nombre: " . $datosRegistros["nombre"] . "<br>";
      echo "Email: " . $datosRegistros["mail"] . "<br>";
      echo "Curso seleccionado: "; 
      switch ($datosRegistros["curso"]) {
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
          echo "Error, lenguaje no registrado en la base de datos";
          break;
      }
      echo "<br><br>";
    }
    mysqli_close($conexion);
  }
}

?>