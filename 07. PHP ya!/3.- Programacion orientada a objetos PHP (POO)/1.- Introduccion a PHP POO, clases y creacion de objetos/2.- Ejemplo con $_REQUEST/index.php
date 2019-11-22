<?php

//Creamos la clase
class persona{
	//Esta variable tiene el valor de $_REQUEST["nombre"].
	//Definimos los atributos (variables)
	public $nombre;

	//Creamos los metodos (funciones)
	public function iniciar($nombre){
		$this->nombre=$nombre;
	}

	public function mostrarNombre(){
		echo $this->nombre; 
	}
}

//Mostramos los resultados. Si existe un if($_POST) se ejecuta el bloque de codigo
require "archivo-php.php";
function mostrarUser(){
	if($_POST){
		echo "Bienvenido ";		
		$nombre = $_REQUEST["nombre"];
		//Ejecutamos la clase POO
		$persona1 = new persona();
		$persona1->iniciar($nombre);
		$persona1->mostrarNombre();
	}
}
?>