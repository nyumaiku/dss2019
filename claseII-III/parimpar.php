<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">PAR O IMPAR</h1>	

		<?php

			$numero = isset($_GET["numero"])?$_GET["numero"]:0;

		?>

	</div>
	<div class="container text-center">
			<?php
				
				if($numero <0){
					echo "<h1>NO PUEDO TRABAJAR NUM NEGATIVOS</h1>"; 
				}
				else if($numero%2==0){
					echo "<h1>PAR</h1>"; 
				}else {
					echo "<h1>IMPAR</h1>";
				}
			?>
	</div>
	</div>
</body>
</html>