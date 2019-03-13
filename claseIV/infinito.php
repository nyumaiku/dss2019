<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">HOLA MUNDO</h1>	
	</div>
	<div class="container text-center">
		<?php

			$contador = 0;
			do{
				echo "HOLA $contador</br>";
				$contador++;
			}while($contador<=10);

		?>
	</div>
	</div>
</body>
</html>