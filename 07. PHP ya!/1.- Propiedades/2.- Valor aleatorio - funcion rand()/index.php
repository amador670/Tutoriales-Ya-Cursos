<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>

	<div class="contenedor">
		<h1 style="color:orange;">Valor aleatorio ~ rand()</h1>
		<h3>La funcion rand() nos permite especificar un valor aleatorio entre dos numeros especificados como parametros, ejemplo $numeroAleatorio=rand(1, 100)</h3>
		<p></p>

		<b><p style="color:orange">Ejemplo:</p></b>
		<hr>

		<?php 
		$valorAleatorio = rand(1, 10);

		if ($valorAleatorio == 10) {
			echo "Ganaste!!, El valor seleccionaste el valor ganador. Gano el numero $valorAleatorio";
		} else {
			echo "Lo sentimos, no ganaste la loteria, vuelva a intentarlo";
		} 
		?>

		<br><br>
		<input type="button" value="Reintentarlo" onclick="location.reload()">
</div>
</div>

</body>
</html>