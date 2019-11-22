<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../Archivos/estilos.css">

  <style>
    #PHP-mostrarTitulo{
      color:orange; 
      background: #FBF8EF; 
      padding: 15px; 
      border: 3px double orange;
    }  
  </style>
</head>
<body>

  <div class="contenedor">
    <h1 style="color:orange;">Metodo constructor de una clase</h1>
    <h3>__consturct</h3>
    <br>

    <p>El constructor es un método especial de una clase. El objetivo fundamental del constructor es iniciar los atributos (variables) del objeto que creamos. Básicamente el constructor remplaza al método iniciar que hacemos constantemente al crear una clase.</p>
    <br>
    <p>Las ventajas de implementar un constructor en lugar del método inicializar son:</p>
    <br>

    <ol>
      <li>El constructor es el primer método que se ejecuta cuando se crea un objeto y no puede ser llamado nuevamente.</li>
      <li>El constructor se llama automáticamente. Es decir es imposible de olvidarse llamarlo ya que se llamará automáticamente.</li>
      <li>Un constructor puede recibir parámetros que se utilizan normalmente para inicializar atributos.</li>
      <li>El constructor es un método opcional, de todos modos es muy común definirlo.</li>
    </ol>

    <br>
    <p>Sintaxis del constructor:</p>
    <pre>
      public function __construct([parámetros])
      {
      [algoritmo]
    }</pre>

    <br>
    <p>Debemos definir un método llamado __construct (es decir utilizamos dos caracteres de subrayado y la palabra construct). El constructor debe ser un método público (public function).</p>

    <br>
    <b><p style="color:orange">Ejemplo:</p></b>
    <hr><br>

    <div>
      <?php 
      imprimirTitulo();
      ?>
    </div>

    <form method="post" action="index.php">
      Ingrese su nombre:
      <input type="text" name="usuario" placeholder="Nombre" maxlength="50">    

      <input type="submit" value="Enviar Datos" name="enviar">        
    </form>
  </div>

</body>
</html>