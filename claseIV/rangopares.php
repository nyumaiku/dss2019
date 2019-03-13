<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">RANGO</h1>	
	</div>
	<div class="container text-center">
		<form method="POST" action="rangopares.php" >
			<div class="form-group">
				<div class="form-group row">
					<div class="col-2">
						<label for="nombre">NUMERO 1</label>
					</div> 
					<div class="col-6">
						<input type="text" id="numero1" name="numero1" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-2">
						<label for="nombre">NUMERO 2</label>
					</div> 
					<div class="col-6">
						<input type="text" id="numero2" name="numero2" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-8">
						<input type="submit" class="btn btn-success" name="enviar" value="Enviar">
					</div>
				</div>
			</div>
		</form>

		<?php
			//extract($_POST);
			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];

			while($numero1<=$numero2){
				if($numero1%2==0){
					echo "$numero1<br/>";
				}
				$numero1++;
			}
			
		?>
	</div>
	</div>
</body>
</html>