<h1>EJEMPLO</h1>
<?php

	$link = fopen("estudiantes.txt", "r");

		while($c = fgetc($link)){
			echo "$c <br/>";
		}

	fclose($link);

?>