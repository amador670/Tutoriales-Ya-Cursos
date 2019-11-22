<?php 

require "archivo-html.php";

function registrarUsuarios(){
  if($_POST){
    $usuario = $_REQUEST["usuario"];
    $correo = $_REQUEST["correo"];

    if(!$usuario || !$correo){  
      echo "Ingrese los datos completos para continuar";
    } else{ 
      $conexion = mysqli_connect("localhost", "root", "", "curso_php_ya") or die("Problemas con la conexión ");

      mysqli_query($conexion, "insert into alumnos(nombre, mail, curso) 
        values('$_REQUEST[usuario]', '$_REQUEST[correo]', '$_REQUEST[curso]')") 

        or die("Problemas en cargar datos a la base de datos ".mysqli_error($conexion));

      mysqli_close($conexion);      
      echo "El usuario fue registrado correctamente en el sistema ";
    }
  }
}

?>