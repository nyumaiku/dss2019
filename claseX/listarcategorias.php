<?php

	function __autoload($class){
		include_once("classes/" . $class . ".php");
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

	<p class="display-3">Listar categorías</p>

	<div class="row">
	<div class="col-8 offset-2">
		<a href="agregarcategorias.php" class="btn btn-success">Nuevo</a>
	<table class="table" id="tabla">
		<thead>
			<tr>
				<td>ID</td>
				<td>NOMBRE</td>
				<td>DESCRIPCION</td>
				<td>ACCIONES</td>
			</tr>
		</thead>
		<tbody>
	<?php
		$categorias = new Categorias;
		
		foreach($categorias->findAll() as $fila){
			echo "<tr>";
			echo "<td>" . $fila["id"] ."</td>";
			echo "<td>" . $fila["nombre"] ."</td>";
			echo "<td>" . $fila["descripcion"] ."</td>";
			echo "<td> " . "<a href='" .$_SERVER["PHP_SELF"]. "?id=" .$fila["id"]. "'>Eliminar</a>" ." </td>";
			echo "</tr>";
		}

	?>	

		</tbody>
	</table>
	</div>
	</div>
</body>
</html>