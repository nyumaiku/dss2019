<h1>EJEMPLO</h1>
<?php

	$link = fopen("estudiantes.txt", "r");

		while($c = fgets($link)){
			echo "$c <br/>";
		}

	fclose($link);

?>