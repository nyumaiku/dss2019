<!DOCTYPE html>
<html>
<head>
	<title>EJEMPLO</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid text-center py-5">
		<h1 class="display-1">TEMPERTURA</h1>	

	</div>
	<form action="temperatura.php" method="post">
	<div class="container text-center">
		<div class="row form-group">
			<div class="col-3">
				<input type="number" min="0" name="temperatura" placeholder="temperatura" class="form-control" required="true">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="submit" name="evaluar" value="Evaluar" class="btn btn-success">
			</div>
		</div>
	</div>
	</form>

	<?php
		$temperatura = isset($_POST["temperatura"])?$_POST["temperatura"]:0;
		if($temperatura > 0 && $temperatura <=10):
			$color = "btn btn-warning";
		elseif($temperatura > 10 && $temperatura <= 20):
			$color = "btn btn-success";
		elseif($temperatura>20):
			$color = "btn btn-danger";
		endif;
	?>
	<div class="<?= $color ?>">SU TEMPERATURA ES <?= $temperatura ?></div>
</body>
</html>