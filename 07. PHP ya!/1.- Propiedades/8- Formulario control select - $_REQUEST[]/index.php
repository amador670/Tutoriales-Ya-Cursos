<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Formulario control select</h1>
      <h3>Manipular formulario mediante la variable $_REQUEST[]</h3>
      <br>

      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="archivo-php.php">

        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

        <select name="agrupacionItens">
          <optgroup label="¿Qué lenguajes quiere aprender?">
            <option value="itens1">Php y base de datos</option>
            <option value="itens2">JavaScript y MySQL</option>
            <option value="itens3">HTML y desarrollo web</option>
            <option value="itens4">CSS y SASS estilos web</option>
          </optgroup>
        </select>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

    </div>

  </body>
</html>