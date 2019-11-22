<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <div class="contenedor">
      <h1 style="color:orange;">Formulario con checkbox</h1>
      <h3>Checkbox mediante la variable $_REQUEST[]</h3>
      <br>
      
      <b><p style="color:orange">Ejemplo: Rellene el formulario</p></b>
      <hr>

      <form method="post" action="archivo-php.php">
        Ingrese su nombre:
        <input type="text" name="nombre" placeholder="Nombre" maxlength="50">    

        <div style="margin-bottom:12px">¿Que deportes practicas?</div>
        <div><input type="checkbox" name="deporte1" value="Futbol">
          1.- Futbol</div>
        <div><input type="checkbox" name="deporte2" value="Beisbol">
          2.- Beisbol</div>
        <div><input type="checkbox" name="deporte3" value="Natación">
          3.- Natación</div>
        <div><input type="checkbox" name="deporte4" value="Aerobics">
          4.- Aerobics</div>
        <div><input type="checkbox" name="deporte5" value="Pesas Gym">
          5.- Pesas Gym</div>
        <div><input type="checkbox" name="deporte6" value="Deportes mentales">
          6.- Deportes mentales</div>
        <div><input type="checkbox" name="deporte7" value="Otros deportes">
          7.- Otros deportes</div>

        <input type="submit" value="Enviar Datos" name="enviar">        
      </form>

    </div>
  </body>
</html>