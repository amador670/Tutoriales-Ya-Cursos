<?php

require "archivo-php.php";

class tituloPagina{
	private $titulo;
	private $ubicacion;

	public function iniciar($titulo, $ubicacion){
		$this->titulo = $titulo;
		$this->ubicacion = $ubicacion;
	}

	public function mostrarTitulo(){
		echo "<div style='text-align:" . $this->ubicacion . "'>";
		echo $this->titulo;
		echo "</div>";
	}
}

function imprimirTitulo(){
	$tituloPagina = new tituloPagina();
	$tituloPagina->iniciar("Bienvenidos, este ejemplo es elaborado con PHP POO", "center");
	$tituloPagina->mostrarTitulo();
}

?>