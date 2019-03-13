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
			$numero = $_GET["numero"];
			$nombre = $_GET["nombre"];

			for($i=($numero-1);$i>0;$i--):
				$numero *= $i;
			endfor;

		?>
		<h1 class="display-3"><?= $nombre .":".$numero ?></h1>
	</div>
	</div>
</body>
</html>