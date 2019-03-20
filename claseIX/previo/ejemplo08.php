<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLOS</title>
</head>
<body>
	<h1>Ejemplo 03</h1>

	<form method="post" action="ejemplo05.php">
		<input type="text" name="nombre">
		<input type="text" name="apellido">
		<input type="submit" name="enviar">
	</form>

<?php

	extract($_POST);

	if(isset($enviar)){
		$link = fopen("nombres.csv", "a+");	
		

		fputcsv($link, array($nombre,$apellido));

		fclose($link);	
	}


	$link = fopen("nombres.csv", "a+");

	while($fields=fgetcsv($link)){
		echo  $fields[0]." ". $fields[1]." <br/>";
	}

	fclose($link);
?>
</body>
</html>