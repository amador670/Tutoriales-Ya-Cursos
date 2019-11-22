<?php

require "archivo-php.php";

function informacion(){

	class head {
		private $titulo;
		public function __construct($title){
			$this->titulo = $title;
		}

		public function graficar(){
			echo "<br>";
			echo "<h1 style='text-align:center;color:orange;'>" . $this->titulo . "</h1>";
			echo "<br>";
		}  
	}

	class body {
		private $lineas = array();
		public function insertParrafo($line){
			$this->lineas[] = $line;
		}
		public function graficar(){
			for($i=0; $i<count($this->lineas); $i++){
				echo "<p>" . $this->lineas[$i] . "</p>";
			}
		}
	}

	class footer {
		private $titulo;
		public function __construct($title){
			$this->titulo = $title;
		}	
		public function graficar(){
			echo "<br>";
			echo "<h4 style='text-align:left;color:orange;'>" . $this->titulo . "</h4>";
		}
	}

	class pagina{
		private $head;
		private $body;
		private $footer;

		public function __construct($texto1, $texto2){
			$this->head = new head($texto1);
			$this->body = new body();
			$this->footer = new footer($texto2);
		}
		public function insertarCuerpo($texto){
			$this->body->insertParrafo($texto);
		}
		public function graficar(){
			$this->head->graficar();
			$this->body->graficar();
			$this->footer->graficar();
		}
	}

	$pagina1=new pagina("Ejemplo elaborado con PHP POO", "Pie de la pagina");
	$pagina1->insertarCuerpo("HOLA MUNDOO!!");
	$pagina1->graficar();
}

?>