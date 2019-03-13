<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">TABLA MULTIPLICAR V3</h1>	

	</div>
	

	<?php
		$numero = 4;
		
	?>

	<table class="table">
		<?php
				for($i = 1; $i <=10;$i++):
					echo "<tr><td>$numero * $i = " . ($numero*$i) . "</td></tr>";
				endfor;
		?>
	</table>
	
	
</body>
</html>