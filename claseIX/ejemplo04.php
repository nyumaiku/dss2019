<?php

extract($_POST);

if(isset($enviar)){
	$link = fopen("nombres.txt", "a+");

		fputs($link,$nombre . "\n");

	fclose($link);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>INSERTANDO NOMBRES</title>
</head>
<body>
<h1>AGREGAR</h1>

<form method="post" action="ejemplo04.php">
	<input type="text" name="nombre">
	<input type="submit" name="enviar" value="ENVIAR">
</form>

<div>

	<?php
		
	$link = fopen("nombres.txt", "r");

		while($c = fgets($link)){
			echo "$c <br/>";
		}

	fclose($link);
	?>

</div>

</body>
</html>