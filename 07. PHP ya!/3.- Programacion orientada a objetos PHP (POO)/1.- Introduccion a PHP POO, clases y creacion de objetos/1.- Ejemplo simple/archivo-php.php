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
    <h3>Introduccion a PHP POO, clases y creacion de objetos.</h3>
    <br>
    <h3>Tipos de programacion</h3>
    <ul>
     <li>Programación Lineal: Es cuando desarrollamos todo el código disponiendo instrucciones PHP alternando con el HTML de la página.
     </li>
     <br>
     <li>Programación Estructurada: Es cuando planteamos funciones que agrupan actividades a desarrollar y luego dentro de la página llamamos a dichas funciones que pueden estar dentro del mismo archivo o en una librería separada.</li>
     <br>
     <li>Programación Orientada a Objetos: Es cuando planteamos clases y definimos objetos de las mismas (Este es el objetivo del tutorial, aprender la metodología de programación orientada a objetos y la sintaxis particular de PHP 5 para la POO).</li>
   </ul>
   
   <br><hr><br>

   <p>En php orientado a objeto seran introducidos conceptos de objeto, clase, atributo, método etc.</p>
   <br>
   <h3>Conceptos básicos de Objetos.</h3>
   <br>
   <p>Un objeto es una entidad independiente con sus propios datos y programación, un ejemplo es: El motor de un auto también es considerado un objeto, en este caso, sus datos (atributos) describen sus características físicas y su programación (métodos) describen el funcionamiento interno y su interrelación con otras partes del automóvil (también objetos)</p>
   <br>
   Esto es una de las ventajas fundamentales de la Programación Orientada a Objetos (POO), permite la reutilización de código (gracias a que está encapsulada en clases) es muy sencilla.
   <br><br>
   <h3>Declaracion y creacion de un objeto.</h3>
   <br>
   <p>La programación orientada a objetos se basa en la programación de clases; a diferencia de la programación estructurada, que está centrada en las funciones.</p>
   <br>
   <p>Una clase es un molde del que luego se pueden crear múltiples objetos, con similares características.</p>
   <br>
   <p>Una clase es una plantilla (molde), que define atributos (lo que conocemos como variables) y métodos (lo que conocemos como funciones).</p>
   <br>
   <p>Debemos crear una clase antes de poder crear objetos (instancias) de esa clase. Al crear un objeto de una clase, se dice que se crea una instancia de la clase o un objeto propiamente dicho.</p>
   <br>
   <p>La palabra clave para declarar la clase es class, seguidamente el nombre de la clase y luego encerramos entre llaves de apertura y cerrado todos sus atributos(variables) y métodos(funciones).</p>
   <br>

   <pre>La sintaxis básica para declarar una clase es:

    class [Nombre de la Clase] {
    [atributos]
    [métodos]
  }</pre>

  <br>
  <p>Definimos un objeto llamado $per1 y lo creamos asignándole lo que devuelve el operador new. Siempre que queremos crear un objeto de una clase utilizamos la sintaxis new [Nombre de la Clase].</p>
  <br>
  <p>La sintaxis de este primer problema es que cuando accedemos a los atributos(variables) dentro de los métodos(funciones) debemos utilizar los operadores <b>$this-> (this y ->):</b></p>
  <br>
  <pre>public function inicializar($nom){
    $this->nombre=$nom;
  }</pre>

  <br>
  <p>El atributo $nombre solo puede ser accedido por los métodos(funciones) de la clase persona, si esta fuera de dicha clase no permite acceder a ellos.</p>

  <br>
  <b><p style="color:orange">Ejemplo PHP POO:</p></b>
  <hr>
  <br>

  <div style="color:orange; font-family:Agency FB; font-size:28px; font-weight:bold;">
    <?php 
    mostrarUsuarios();
    ?>  
  </div>

</div>

</body>
</html>