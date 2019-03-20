<?php

extract($_GET);

		
	$link = fopen($resource, "r");

		while($c = fgets($link)){
			echo "$c <br/>";
		}

	fclose($link);
	?>
