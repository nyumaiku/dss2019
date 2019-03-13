<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">EQUIPOS</h1>	

	</div>
	<form action="equipos.php" method="post">
	<div class="container text-center">
		<div class="row form-group">
			<div class="col-3">
				<input type="text"  name="equipo" placeholder="Ingrese el equipo" class="form-control" required="true">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="submit" name="evaluar" value="Evaluar" class="btn btn-success">
			</div>
		</div>
	</div>
	</form>

	<?php
		$equipo = $_POST["equipo"];
		$titulos = 0;
		switch($equipo):
			case 'Real Madrid':
				$titulos = 13;
				break;
			case 'Milan':
					$titulos = 13;
				break;
			case 'Liverpool':
					$titulos = 5;
				break;
			case 'Barca':
					$titulos = 5;
				break;
			case 'Juve':
					$titulos = 2;
				break;
			default:
				$titulos = 0;
		endswitch;
	?>
	
	<h1 class="display-3">El equipo <?= $equipo ?> tiene <?= $titulos ?> Champions</h1>	
</body>
</html>