<?php

require "archivo-php.php";

if($_REQUEST){
	setcookie("usuario", $_REQUEST["nombre"], 0);		
}

function bienvenida(){
	if ($_POST) {
		if(isset($_COOKIE["usuario"]) && !$_REQUEST["nombre"]==""){
			echo "Bienvenido " . $_REQUEST["nombre"];
		} else{
			if($_REQUEST["nombre"]==""){
				echo "Ingrese su nombre para continuar";
			}
		}
	}
}
?>