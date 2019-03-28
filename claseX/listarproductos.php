<!DOCTYPE html>
<html>
<head>
	<title>PRODUCTOS</title>
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

<p class="display-3">Listado de productos</p>
<div class="row">
<div class="col-8 offset-2">
	<a class="btn btn-success" href="agregarproductos.php">Nuevo</a>
	<table id="tabla">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>DESCRIPCION</th>
				<th>CATEGORIA</th>
				<th>PRECIO</th>
				<th>EXISTENCIAS</th>
			</tr>
		</thead>
		<tbody>
	<?php 

	$mysqli = new mysqli("127.0.0.1","root","","inventario");

	$query = "select p.id, p.nombre, p.descripcion, c.nombre as categoria, p.precio, p.existencias from productos p
	join categorias c
	on p.categoria_id = c.id";

	$resultset = $mysqli->query($query);

	while($row = $resultset->fetch_object()){
		echo "<tr>";
		echo "<td>" . $row->id . "</td>";
		echo "<td>" . $row->nombre . "</td>";
		echo "<td>" . $row->descripcion . "</td>";
		echo "<td>" . $row->categoria . "</td>";
		echo "<td>" . $row->precio . "</td>";
		echo "<td>" . $row->existencias . "</td>";
		echo "</tr>";
	}

	$resultset->close();

	$mysqli->close();

	?>
		</tbody>
	</table>
</div>
</div>

</body>
</html>