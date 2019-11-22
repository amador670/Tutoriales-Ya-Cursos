<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Formulario con radio button</h1>
      <h3></h3>
      <br>
      <p>Implementar radio button mediante la variable $_REQUEST[]</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <p style="color:blue">Operacion matematica, suma y resta.</p>
      <hr>

      <form method="post" action="archivo-php.php">

        Ingrese el primer valor:
        <input type="text" name="valor1" placeholder="Valor 1">    

        Ingrese el segundo valor: 
        <input type="text" name="valor2" placeholder="Valor 2">

        <div style="margin-bottom:12px">¿Qué operacion realizar?:</div>
        
        <div>Sumar:<input type="radio" value="sumar" name="operacionMatematica"></div>

        <div>Restar:<input type="radio" value="restar" name="operacionMatematica"></div>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>
     
    </div>

  </body>
</html>