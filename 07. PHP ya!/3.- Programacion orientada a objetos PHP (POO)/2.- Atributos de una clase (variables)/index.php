<?php

require "archivo-php.php";

//Creamos la calse
class enlacesWeb{
  //Creamos los atributos (variables)
  //Creamos una variable para los enlaces y otra para los titulos, cada una sera un array.
  private $enlaces = array();
  private $tituloEnlaces = array();

  //Creamos los metodos que cargaran los enlaces y titulos mediante dos parametros.
  public function cargarOpcion($enlace2, $titulo2){
    $this->enlaces[] = $enlace2;
    $this->tituloEnlaces[] = $titulo2;
  }

  public function mostrarOpcion(){
    for($i=0; $i<count($this->enlaces); $i++){

      echo "<li>" . "<ul>";
      echo '<a href="' . $this->enlaces[$i] . '">' . $this->tituloEnlaces[$i] . "</a>";
      echo "</ul>" . "</li>";
      
    }
  }
}

//Mostramos los resultados
function mostrarResultado(){
  $enlacesWeb2 = new enlacesWeb();
  $enlacesWeb2-> cargarOpcion('http://www.google.com','Google');
  $enlacesWeb2-> cargarOpcion('http://www.yahoo.com','Yahoo');
  $enlacesWeb2-> cargarOpcion('http://www.msn.com','MSN');
  $enlacesWeb2-> mostrarOpcion();
}

?>