<?php


	function __autoload($class){
		include_once("classes/" . $class . ".php");
	}

	$categorias = new Categorias();

	extract($_POST);

	if(isset($enviar)){

		$mysqli = new mysqli('127.0.0.1','root','','inventario');
		$sql = "insert into productos (nombre,descripcion,categoria_id,precio,existencias) values (?,?,?,?,?)";
		$statement = $mysqli->prepare($sql);
		$statement->bind_param('ssidi',$nombre,$descripcion,$categoria_id,$precio,$existencias);

		$statement->execute();

		header("location: listarproductos.php");

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CATEGORIAS</title>
		<link rel="stylesheet" type="text/css" href="DataTables/jquery.datatables.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>

	 
	<script type="text/javascript" src="DataTables/jquery.datatables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
	    $('#tabla').DataTable();
	});
	</script>

</head>
<body>
	<p class="display-3">Agregar de productos</p>
	<div class="row">
		<div class="col-8 offset-2">
			<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>"> 
				<input type="text" required="true" placeholder="nombre" name="nombre" class="form-control">
				<input type="text" required="true" placeholder="descripcion" name="descripcion" class="form-control">
				<select name="categoria_id" class="form-control">
					<?php
						$lista = $categorias->findAll();
						foreach ($lista as $item) {
							echo "<option value='" .$item['id'] . "'>" .$item['nombre'] ."</option>";
						}
					?>
				</select>
				<input type="number" min="0.0" required="true" step="0.1"  placeholder="precio" name="precio" class="form-control">
				<input type="number" min="0" required="true"  placeholder="existencias" name="existencias" class="form-control">
				<input type="submit" name="enviar" value="enviar" class="btn btn-success">
			</form>
		</div>
	</div>

</body>
</html>