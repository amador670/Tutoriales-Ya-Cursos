<?php

require "archivo-php-cookie-aceptada.php";

function validacionCorreo(){	
	if($_REQUEST["correoUsuario"]=="" && !isset($_REQUEST["opcion"])){
		echo "Ingrese un email y seleccione si quiere que sea recordado para continuar." . "<br>";
	} elseif($_REQUEST["correoUsuario"]==""){
		echo "Ingrese un email para continuar la afiliacion" . "<br>";
	} elseif(!isset($_REQUEST["opcion"])){
		echo "No selecciono si quiere recordar el email." . "<br>";
	} elseif($_REQUEST["opcion"]=="recordar"){
		setcookie("correo", $_REQUEST["correoUsuario"], time()+(60*60*24*365), "/");
		echo "Cookie creada. Se recordara el email." . "<br>";
	} elseif($_REQUEST["opcion"]=="noRecordar"){
		setcookie("correo", "", time()-1000, "/");
		echo "Cookie eliminada. No se recordara el email." . "<br>";	
	}
}
?>