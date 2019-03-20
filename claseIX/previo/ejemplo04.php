<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLOS</title>
</head>
<body>
	<h1>Ejemplo 03</h1>

	<form method="post" action="ejemplo3.php">
		<input type="text" name="texto">
		<input type="submit" name="enviar">
	</form>

<?php

	$link = dir(".");

	while($archivo = $link->read()){
		echo "$archivo</br>";
	}
	
?>
</body>
</html>