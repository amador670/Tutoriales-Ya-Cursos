<?php
class tituloPagina{
  private $titulo;
  private $ubicacion;

  public function iniciar($titulo, $ubicacion){
    $this->titulo = $titulo;
    $this->ubicacion = $ubicacion;
  }

  public function mostrarTitulo(){
    echo "<div id='PHP-mostrarTitulo' style='text-align:" . $this->ubicacion . "'>";
    echo $this->titulo;
    echo "</div>";
  }
}

require "archivo-php.php";
function imprimirTitulo(){
  if($_POST){
    /*Se puede añadir de dos formas el condicional
    1.- Mediante !empty y empty, indicando si esta vacio la variable global $_POST[usuario] o no ejecutar una accion
    2.- Mediante !$_POST[usuario] y $_POST[usuario], indicando si hay un metodo $_POST[usuario] o no lo hay ejecutar una accion    
    */
    if(!empty($_POST["usuario"])){
      $tituloPagina = new tituloPagina();
      $tituloPagina->iniciar("Bienvenido $_REQUEST[usuario], este ejemplo es elaborado con PHP POO.", "center");
      $tituloPagina->mostrarTitulo();
    } 
    elseif(empty($_POST["usuario"])){
      $tituloPagina = new tituloPagina();
      $tituloPagina->iniciar("Ingrese su nombre para continuar.", "center");
      $tituloPagina->mostrarTitulo();
    }
  }
}

?>