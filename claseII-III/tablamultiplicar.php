<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">TABLA MULTIPLICAR</h1>	

	</div>
	

	<?php
		$numero = 2;
		$iterador = 0;
	?>

	<table class="table">
		<?php
			do{
				$iterador++;
				echo "<tr><td>$numero * $iterador = " . ($numero*$iterador) . "</td></tr>";
			}while($iterador <= 10)
		?>
	</table>
	
	
</body>
</html>