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

	extract($_POST);

	if(isset($enviar)){
		$link = fopen("agregar.txt", "a+");	
		
		fwrite($link, $texto."\n");

		fclose($link);	
	}


	$link = fopen("agregar.txt", "a+");

	while($s=fgets($link,4096)){
		echo "$s <br/>";
	}

	fclose($link);
?>
</body>
</html>