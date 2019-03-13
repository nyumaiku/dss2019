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
		<div class="row">
		<?php

			$color[] = "alert alert-danger";
			$color[] = "alert alert-success";
			$color[] = "alert alert-info";
			$color[] = "alert alert-warning";

			$nombre = "Miguel Orellana";
			$contador=0;
			for($i=0;$i<strlen($nombre);$i++){

				if($contador < sizeof($color)-1){
					$contador++;
				}else{
					$contador = 0;
				}


	echo "<div class='$color[$contador] col-sm-1'>" . $nombre[$i] . "</div>";
			}
		?>

		</div>
	</div>
	</div>
</body>
</html>