<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Programacion orientada a objetos en PHP (POO).</h1>
    <h3>Introduccion a POO</h3>
    <br>

    <pre>La sintaxis básica para declarar una clase es:

      class [Nombre de la Clase] {
      [atributos]
      [métodos]
    }</pre>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr><br>

    <p>Implementaremos una clase llamada Persona que tendrá como atributo (variable) su nombre y dos métodos (funciones), uno de dichos métodos inicializará el atributo nombre y el siguiente método mostrará en la página el contenido del mismo.</p>
    <br>

    <div style="color:orange; font-family:Agency FB; font-size: 32px; font-weight:bold; text-align: center;">
      <?php 
      mostrarUser();
      ?>
    </div>

    <form method="post" action="index.php">
      Ingrese su nombre:
      <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>
  </div>

</body>
</html>