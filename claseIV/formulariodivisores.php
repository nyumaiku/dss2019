<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">DIVISORES</h1>	
	</div>
	<div class="container text-center">
		<form method="POST" action="formulariodivisores.php" >
			<div class="form-group">
				<div class="form-group row">
					<div class="col-2">
						<label for="nombre">NUMERO</label>
					</div> 
					<div class="col-6">
						<input type="text" id="numero" name="numero" class="form-control">
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
			extract($_POST);
			$numero = (isset($numero))?$numero:0;
			
			$acumulador = $numero;
			do{
				if($numero%$acumulador==0){
					echo "$acumulador<br/>";
				}
				$acumulador--;
			}while($acumulador>0);
		?>
	</div>
	</div>
</body>
</html>