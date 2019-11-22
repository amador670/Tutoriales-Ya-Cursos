<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../../Archivos/estilos.css">
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Metodos de una clase</h1>
    <h3>Metodos (funcione) de una clase.</h3>
    <br>
    <p>Los métodos son como las funciones en los lenguajes estructurados, pero están definidos dentro de una clase y operan sobre los atributos de dicha clase.</p>
    <br>
    <p>Los métodos también son llamados las responsabilidades de la clase. Para encontrar las responsabilidades de una clase hay que preguntarse qué puede hacer la clase, en este caso su funcion o que ejecutara, de que tarea se encargara dicho método (dicha funcion).</p>
    <br>
    <p>El objetivo de un método o funcion es ejecutar las actividades que tiene encomendada la clase a la cual pertenece.</p>
    <br>
    <p>Los atributos (variables) de un objeto (clase) se modifican mediante llamadas a sus métodos (funciones).</p>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr><br>

    <div style="color:orange; background: #FBF8EF; padding: 15px; border: 3px double orange;">
    <?php 
    imprimirTitulo();
    ?>
    </div>

    <form method="post" action="index.php">

      Ingrese su nombre:
      <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

      Ingrese su edad: 
      <input type="text" name="edad" placeholder="Edad" maxlength="2">

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>

    <?php 

    ?>
  </div>

</body>
</html>