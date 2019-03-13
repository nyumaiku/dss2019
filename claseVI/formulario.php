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
		<form method="post" action="formulario.php">
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
		echo $campo;
		//preg_match_all("/[A-Z]{2}[0-9]{6}/", $campo, $encontrados);
		//print_r($encontrados);
		//echo preg_match("/.*\.(pdf|txt|docx)/", $campo);


		//preg_match("/lula/", $campo, $encontrados);
		//print_r($encontrados);

		//echo preg_replace("/(puta|mierda|culo)/", "*&^%", $campo);

		//echo preg_match("/^(\\+|\\-)?\\$([0-9]+)(\\.[0-9]{2})?$/", $campo);

		//preg_match_all("/[A-Z]{2}[0-9]{6}/", $campo, $encontrados);

		//foreach ($encontrados[0] as $value) {
		//	$campo = preg_replace("/$value/", "<b class=\"alert alert-success\">$value</b>", $campo);
		//}

		echo $campo;

	?>
</body>
</html>