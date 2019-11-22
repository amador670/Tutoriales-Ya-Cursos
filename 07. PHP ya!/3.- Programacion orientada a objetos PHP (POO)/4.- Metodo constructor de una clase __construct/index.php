<?php
class posicionTexto{	
	private $titulo;
	private $posicion;

	public function __construct($titulo, $posicion){
		$this->titulo = $titulo;
		$this->posicion = $posicion;
	}

	public function mostrarTexto(){
		echo "<div id='PHP-mostrarTitulo' style='text-align:" . $this->posicion . "'>";
		echo $this->titulo;
		echo "</div>";
	}
}

require "archivo-php.php";
function imprimirTitulo(){
	if($_POST){
		if(!empty($_POST["usuario"])){
			$posicionTexto = new posicionTexto("Bienvenido $_REQUEST[usuario], este ejemplo es elaborado con PHP POO.", "center");
			$posicionTexto->mostrarTexto();
		} 
		elseif(empty($_POST["usuario"])){
			$posicionTexto = new posicionTexto("Ingrese su nombre para continuar.", "center");
			$posicionTexto->mostrarTexto();
		}
	}
}

?>