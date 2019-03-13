<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">BANNER</h1>	
	</div>
	<div class="container text-center">
		<form action="banner.php" method="GET">
			<div class="form-group">
				<div class="form-group row">
					<div class="col-2">
						<label for="nombre">Nombre</label>
					</div> 
					<div class="col-6">
						<input type="text" id="nombre" name="nombre" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group row">
					<div class="col-8">
						<input type="submit" class="btn btn-success" name="enviar" value="Enviar">
					</div>
			</div>
		</form>
		<div class="row">

		<?php 

			$color[] = "alert alert-danger";
			$color[] = "alert alert-success";
			$color[] = "alert alert-info";
			$color[] = "alert alert-warning";

			extract($_GET);
			$numcaracteres = strlen($nombre);
			$contador=0;
			for($i = 0; $i < $numcaracteres; $i++){

				//if($i==4){
				//	break;
				//}

				echo "<div class='$color[$contador]'>" . $nombre[$i] .  "</div>";
				if($contador < sizeof($color)-1){
					$contador++;	
				}else{
					$contador = 0;
				}
				
			}

		?>

		</div>
	</div>
	
</body>
</html>