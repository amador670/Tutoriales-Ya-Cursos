
<?php 

require "registro-completado.php";

function registrarUsuarios(){
  if($_POST){
    $usuario = $_REQUEST["usuario"];
    $correo = $_REQUEST["correo"];

    if(!$usuario || !$correo){  
      echo "Ingrese los datos completos para continuar";
    } else{ 
      $conexion = mysqli_connect("localhost", "root", "", "curso_php_ya") or die("Problemas con la conexión ".mysqli_error($conexion));

      $registro = mysqli_query($conexion, "INSERT INTO alumnos(nombre, mail, curso) 
        values('$_REQUEST[usuario]', '$_REQUEST[correo]', 'null')") 

        or die("Problemas en cargar datos a la base de datos ".mysqli_error($conexion));
    }
    mysqli_close($conexion);      
    echo "El usuario fue registrado correctamente en el sistema ";
  }
}

?>