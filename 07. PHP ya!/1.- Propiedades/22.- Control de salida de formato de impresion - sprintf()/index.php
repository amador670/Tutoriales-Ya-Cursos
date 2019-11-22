<?php

require "archivo-php.php";

function stringPrinft($color1, $color2, $color3){
	$color = sprintf("#%02X%02X%02X", $color1, $color2, $color3);
	return $color;
}


?>