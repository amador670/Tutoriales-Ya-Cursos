<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../Archivos/estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Colaboracion de objetos</h1>
      <h3>Añadir una clase dentro de otra.</h3>
      <br>
      <p>Cuando dentro de una clase definimos un atributo o una variable de otra clase decimos que esta segunda clase colabora con la primera.</p>
      <br>
      <p>Presentemos un problema: Una página web es común que contenga una "cabecera, un cuerpo y un pié de página". Estas tres secciones podemos perfectamente identificarlas como clases. También podemos identificar "otra clase pagina". Ahora bien como podemos relacionar estas cuatro clases (cabecera, cuerpo, pie, pagina), como podemos imaginar la cabecera, cuerpo y pie son partes de la pagina. Luego podemos plantear una clase pagina que contenga tres atributos de tipo objeto.</p>
      <br>
      <p>En forma simplificada este problema lo podemos plantear así:</p>
      <br>
      <pre>
      class Cabecera{
        [atributos y métodos]
      }
      class Cuerpo{
        [atributos y métodos]
      }
      class Pie {
        [atributos y métodos]
      }
      class Pagina {
        private $cabecera;
        private $cuerpo;
        private $pie;
        [métodos] 
      }</pre>
      <br>
      <p>Como podemos ver declaramos cuatro clases (Cabecera, Cuerpo, Pie y Pagina), fuera de cualquier clase definimos un objeto de la clase Pagina:</p>
      <br>
      <p>$pag=new Pagina();</p>
      <br>
      <p>Dentro de la clase "Pagina" definimos tres atributos de tipo objeto de las clases "Cabecera, Cuerpo y Pie" respectivamente. Luego seguramente dentro de la clase "Pagina" crearemos los tres objetos y llamaremos a sus métodos respectivos.</p>


      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <?php 
      informacion();
      ?>
    </div>

  </body>
</html>