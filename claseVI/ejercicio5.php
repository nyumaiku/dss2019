<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-3">EXPRESIONES REGULARES</h1>	
	</div>
	<div class="container text-center">
		<form method="post" action="ejercicio5.php">
			<div class="form-group">
				<div class="form-group row">
					<div class="col-1 offset-4">
						<label for="campo">Nombre</label>
					</div> 
					<div class="col-3">
						<input type="text" id="campo" name="campo" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-1 offset-5">
						<input type="submit" name="enviar" value="enviar" class="btn btn-success">
					</div>
				</div>
			</div>
		</form>

	</div>
	</div>
	<?php
		extract($_POST);
		$campo = isset($campo)?$campo:"";
		$expresion = "/^.*\\.(docx|pdf|txt)$/";

		echo "<div class='alert alert-danger'>" . preg_match($expresion, $campo) . "</div>";

	?>
</body>
</html>