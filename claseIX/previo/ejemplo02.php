<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLOS</title>
</head>
<body>
	<h1>Ejemplo 01</h1>
<?php

	if(file_exists("texto.txt")){
		echo "Existe";
	}

	$link = fopen("texto.txt", "r");

	while($s=fgets($link,4096)){
		echo "$s <br/>";
	}

	fclose($link);
?>
</body>
</html>