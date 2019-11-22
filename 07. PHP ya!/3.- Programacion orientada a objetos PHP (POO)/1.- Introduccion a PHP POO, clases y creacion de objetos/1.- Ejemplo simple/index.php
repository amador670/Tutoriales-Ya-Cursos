<?php

require "archivo-php.php";

//Creamos una clase (Es el molde)
class persona{
	//Definimos los atributos (Variables)
	private $nombre;

	//Creamos los metodos (funciones)
	//La sintaxis de este primer problema es que cuando accedemos a los atributos(variables) dentro de los métodos(funciones) debemos utilizar los operadores $this-> (this y ->):
	public function iniciar($nombre){
		$this->nombre=$nombre;
	}

	public function mostrarNombre(){
		echo $this->nombre . ", "; 
	}
} 

	//Mediante una funcion sencilla mostramos los resultados
function mostrarUsuarios(){
	echo "Los hijos de Maximo y Magdalena son: ";

//Definimos varios objetos llamados personas1, 2 y 3, y lo creamos asignándole lo que devuelve el operador new. Siempre que queremos crear un objeto de una clase utilizamos la sintaxis new [Nombre de la Clase].

	$persona1 = new persona();
	$persona1->iniciar("Amador");
	$persona1->mostrarNombre();

//Luego para llamar a los métodos debemos anteceder el nombre del objeto el operador -> y por último el nombre del método. Para poder llamar al método, éste debe ser definido público (con la palabra clave public). En el caso que tenga parámetros se los enviamos:

	$persona2 = new persona();
	$persona2->iniciar("Karen");
	$persona2->mostrarNombre();

	$persona3 = new persona();
	$persona3->iniciar("Sarah");
	$persona3->mostrarNombre();

}
?>