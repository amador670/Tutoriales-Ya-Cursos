<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Vectores o array asociativos</h1>
      <h3>vector[nombre]="dato del vector"</h3>
      <h3>vector[nombre]=array("dato del vector" => "registro")</h3>
      <br>
      <p>Mediante un vector asociativo podemos manipular de diferentes formas varios datos de un vector / array.</p>

      <br>
      <b><p style="color:orange">Ejemplo:</p></b>
      <hr>

      <form method="post" action="archivo-php.php">  

        <div style="margin-bottom:12px">Seleccione un usuario:</div>

        <select name="agrupacionUsuarios">
          <optgroup label="Ver datos de usuarios registrados">
            <option value="itens1">Amador Martinez</option>
            <option value="itens2">Maximo Martinez</option>
            <option value="itens3">Magdalena Rivera</option>
            <option value="itens4">Karen Martinez</option>
            <option value="itens5">Sarah Martinez</option>
          </optgroup>
        </select>

        <div style="font-size:16px; margin-top: 25px;"><input type="checkbox" id="terminos">Acepto los terminos de privacidad.</div>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

    </div>

  </body>
</html>