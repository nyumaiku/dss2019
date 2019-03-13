<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">TABLA MULTIPLICAR V2</h1>	

	</div>
	

	<?php
		$numero = 3;
		$iterador = 0;
	?>

	<table class="table">
		<?php
			while($iterador<=10){
				$iterador++;
				echo "<tr><td>$numero * $iterador = " . ($numero*$iterador) . "</td></tr>";
			}
		?>
	</table>
	
	
</body>
</html>