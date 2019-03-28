<?php
	
	function __autoload($class){
		include_once("classes/" . $class . ".php");
	}

	extract($_POST);

	if(isset($enviar)){
		$categorias = new Categorias;
		$categorias->insert(array("nombre"=>$nombre,"descripcion"=>$descripcion));
		header("location: listarcategorias.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR</title>
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
	<p class="display-3">Agregar categorías</p>
	<div class="row">
	<div class="col-8 offset-2">
		<a href="listarcategorias.php" class="btn btn-info">Lista</a>
	<div>
		<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
			<input type="text" name="nombre" placeholder="Nombre" class="form-control">
			<input type="text" name="descripcion" placeholder="Descripcion"  class="form-control">
			<input type="submit" name="enviar" class="btn btn-success" value="Enviar" >
		</form>
	</div>
	</div>
	</div>
</body>
</html>